<?php

namespace App\Imports;

use App\Models\Answer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AnswerImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Answer([
            'question_id' => $row['question_id'],
            'answer_text' => $row['answer_text'],
            'is_correct' => $row['is_correct'],
        ]);
    }
}
