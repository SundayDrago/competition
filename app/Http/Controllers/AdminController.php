<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\School;

use App\Import;

use App\Models\Question;

use App\Models\Participants;

use App\Models\Challenge;

use App\Models\Representative;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\QuestionsImport;
use App\Imports\AnswersImport;

//use PhpOffice\phpSpreadsheet\IOFactory;

class AdminController extends Controller
{

    public function addview(){
        return view('admin.add_schools');
    }

    public function addschools(Request $request){
       $school =new school;

       $school->name=$request->name;
       $school->school_district=$request->school_district;
       $school->registration_number=$request->registration_number;
       $school->representative_name=$request->representative_name;
       $school->representative_email=$request->representative_email;

       $school ->save();

       return redirect()->back()->with('message', 'School added successfully!');

    }

    public function participantview(){
    $data =participants::all();
    return view('admin.participant', compact('data'));
}

public function add_challenges(Request $request)
{
    // $challenges =new 
    $challenges =new challenge;

    $challenges->title=$request->title;
    $challenges->start_date=$request->start_date;
    $challenges->end_date=$request->end_date;
    $challenges->duration=$request->duration;
    $challenges->num_questions =$request->num_questions;
    return view('admin.challenges');
   }
   public function representative_view(){
    $data1 =reprsentative::all();
    return view('admin.representative', compact('data1'));
}
public function import(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
        'duration' => 'required|integer|min:1',
        'num_questions' => 'required|integer|min:1',
        'questions' => 'required|mimes:xlsx',
        'answers' => 'required|mimes:xlsx'
    ]);

    $challenge = Challenge::create([
        'title' => $request->title,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
        'duration' => $request->duration,
        'num_questions' => $request->num_questions,
    ]);

    Excel::import(new QuestionsImport, $request->file('questions'));
    Excel::import(new AnswersImport, $request->file('answers'));

    return redirect()->back()->with('success', 'Files imported successfully.');
}

public function createChallenge()
{
    $questions = Question::inRandomOrder()->take(10)->get(); // Get 10 random questions
    $challenge = [];

    foreach ($questions as $question) {
        $answers = Answer::where('question_id', $question->id)->get();
        $challenge[] = [
            'question' => $question,
            'answers' => $answers
        ];
    }

    return view('admin.challenges', compact('challenge'));
}

}
