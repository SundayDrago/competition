<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Challenge;

class ChallengeController extends Controller
{
    public function saveChallenge(Request $request){
        //Let get the total number of questions in the table by counting

        $sumQuestion =Question::count();

       //Let's define a variable that gets the max number of questions(only 10 not less or more)
       $maxQuestionz = min(10, $sumQuestion);

       if($sumQuestion>0){
        //Let's get the random number of questions
        $randomQuestion = rand(10, $maxQuestionz);

        //Let us create a challenge with random questions
        $challenge = new Challenge();
        $challenge->challengeNumber =$request->challengeNumber;
        $challenge->start_date = $request->start_date;
        $challenge ->end_date =$request->end_date;
        $challenge->duration =$request->duration;
        $challenge->num_questions =$randomQuestion;
        $challenge->save();

        return redirect()->back()->with('message', 'A new challenge created successfully!');
       }
       else{
        return redirect()->back()->with('message', 'No questions in the table');
       }
    }
    public function showChallenge(){
        return view('admin.challenge');
    }

    public function index()
    {
        $challenges = Challenge::with('questions')->get();
        return view('admin.view_challenge', compact('challenges'));
    }
    
}
