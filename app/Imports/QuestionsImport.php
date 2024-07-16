<?php

namespace App\Imports;

use App\Models\Question;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class QuestionImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Question([
            'question_text' => $row['question_text'],
            'category' => $row['category'],
        ]);
    }
}
