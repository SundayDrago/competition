<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\QuestionsImport;
use App\Imports\AnswersImport;

class UploadController extends Controller
{
    // Method to display the upload form
    public function upload()
    {
        return view('admin.upload'); // Create this blade file to display the form
    }

    // Method to handle file uploads
    public function viewupload(Request $request)
    {
        // Validate uploaded files
        $request->validate([
            'questions_file' => 'required|mimes:xlsx,xls',
            'answers_file' => 'required|mimes:xlsx,xls',
        ]);

        // Handle questions.xlsx file
        Excel::import(new QuestionsImport(), $request->file('questions_file'));

        // Handle answers.xlsx file
        Excel::import(new AnswersImport(), $request->file('answers_file'));

        return redirect()->back()->with('success', 'Files imported successfully!');
    }
}
