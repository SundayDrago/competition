<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\QuestionImport;
use App\Imports\AnswerImport;
use App\Models\Question;
use App\Models\Answer;

class ImportController extends Controller
{

    public function showUploadForm()
{
    $question =Question::all();
    $answer =Answer::all();
    return view('admin.import', compact('question', 'answer'));
}
    public function importFiles(Request $request)
    {
        $request->validate([
            'questions_file' => 'required|mimes:xlsx',
            'answers_file' => 'required|mimes:xlsx',
        ]);

        if ($request->hasFile('questions_file')) {
            Excel::import(new QuestionImport, $request->file('questions_file'));
        }

        if ($request->hasFile('answers_file')) {
            Excel::import(new AnswerImport, $request->file('answers_file'));
        }

        return back()->with('success', 'Files imported successfully.');
    }
    
}
