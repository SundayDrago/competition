<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\QuestionsImport;
use App\Imports\AnswersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Question;
use App\Models\Answer;

class ImportController extends Controller
{
    public function showUploadForm()
    {
        $question = Question::all();
        return view('admin.import', compact('question'));
    }

    public function importFiles(Request $request)
    {
        $request->validate([
            'questions_file' => 'required|mimes:xls,xlsx',
        ]);

        try {
            Excel::import(new QuestionsImport, $request->file('questions_file'));
            return redirect()->back()->with('success', 'Question file uploaded to the database successfully');
        } catch (\Exception $e) {
            \Log::error('Import Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Question file not uploaded due to some error in the code');
        }
    }

    public function showUploadAnswerForms()
    {
        $answer =Answer::all();
        return view('admin.import_answers', compact('answer'));
    }

    public function importAnswers(Request $request)
    {
        $request->validate([
            'answers_file' => 'required|mimes:xls,xlsx',
        ]);
        Excel::import(new AnswersImport, $request->file('answers_file'));

        return redirect()->back()->with('success', 'Answer file uploaded to the database successfully');

        // try {
        //     Excel::import(new AnswersImport, $request->file('answers_file'));
        //     return redirect()->back()->with('success', 'Answer file uploaded to the database successfully');
        // } catch (\Exception $e) {
        //     \Log::error('Import Error: ' . $e->getMessage());
        //     return redirect()->back()->with('error', 'Answer file not uploaded due to some error in the code');
        // }
    }
}
