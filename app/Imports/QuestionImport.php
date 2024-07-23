<?php

namespace App\Imports;

use App\Models\Question;
use Maatwebsite\Excel\Concerns\ToModel;

class QuestionImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Question([
            'challengeNumber' => $row['challengeNumber'], // Update this line to match the actual header in your Excel file
            'question_text'   => $row['question_text'],
            'marks'           => $row['marks'],
        ]);
    }
}
