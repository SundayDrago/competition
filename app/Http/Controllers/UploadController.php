<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\QuestionsImport;
use App\Imports\AnswersImport;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Challenge;

class UploadController extends Controller
{
    
    protected $adminController;

    public function __construct(AdminController $adminController)
    {
        $this->adminController = $adminController;
    }
    // Method to display the upload form
    public function upload()
    {
        return view('admin.upload'); // Create this blade file to display the form
    }

    // Method to handle file uploads
    public function uploadchallenge(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'questionsFile' => 'required|mimes:xlsx,xls',
            'answersFile' => 'required|mimes:xlsx,xls',
            'challengeNumber' => 'required',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after_or_equal:startDate',
            'duration' => 'required|integer|min:1',
            'questionsPerAttempt' => 'required|integer|min:1',
        ]);

        try {
            // Import Excel files
            $questionsImport = new QuestionsImport;
            $answersImport = new AnswersImport;

            Excel::import($questionsImport, $request->file('questionsFile'));
            Excel::import($answersImport, $request->file('answersFile'));

            // Insert Challenge data
            $challenge = new Challenge;
            $challenge->challengeNumber = $request->challengeNumber;
            $challenge->start_date = $request->startDate;
            $challenge->end_date = $request->endDate;
            $challenge->duration = $request->duration;
            $challenge->num_questions = $request->questionsPerAttempt;
            $challenge->save();

            // Retrieve the ID of the inserted challenge
            $challengeId = $challenge->id;

            // Insert Questions and Answers data
            $questionsData = $questionsImport->data;
            $answersData = $answersImport->data;

            foreach ($questionsData as $questionRow) {
                $question = new Question;
                $question->question_text = $questionRow['question']; // Adjust according to your column names
                $question->marks = $questionRow['marks']; // Adjust according to your column names
                $question->challenge_id = $challengeId;
                $question->save();

                // Find corresponding answer from answers data
                $answerText = $this->findAnswerByQuestionNumber($questionRow['number'], $answersData);

                if ($answerText !== null) {
                    $answer = new Answer;
                    $answer->question_id = $question->id;
                    $answer->answer_text = $answerText; // Adjust according to your column names
                    $answer->save();
                }
            }

            session()->flash('success', 'Challenge Setup successfully.');
            $challenges = Challenge::orderBy('start_date', 'asc')->get();
            return view('admin.challenges', ['challenges' => $challenges]);
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            //Log::error('Error during data import: ' . $e->getMessage());


            // Flash an error message to the session
            session()->flash('error', 'An error occurred while importing data. Please try again.');
            dd($e);
            // Redirect back to the import form with old input
            return redirect()->back()->withInput();
        }
    }
    private function findAnswerByQuestionNumber($questionNumber, $answersData)
    {
        //dd($answersData);
        foreach ($answersData as $answerRow) {

            if ($answerRow['question_number'] == $questionNumber) {
                return $answerRow['answer']; // Adjust according to your column names
            }
        }
        return null;
    }
}