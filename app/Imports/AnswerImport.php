<?php

namespace App\Imports;

use App\Models\Answer;
use Maatwebsite\Excel\Concerns\ToModel;

class AnswerImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Answer([
            'question_id'  => $row['question_id'],
            'answer_text'  => $row['answer_text'],
            'marks'        => $row['marks'],
        ]);
    }
}
