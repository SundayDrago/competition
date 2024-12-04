<?php

// namespace App\Imports;

// use App\Models\Question;
// use Maatwebsite\Excel\Concerns\ToModel;

// class QuestionsImport implements ToModel
// {
//     /**
//     * @param array $row
//     *
//     * @return \Illuminate\Database\Eloquent\Model|null
//     */
//     public function model(array $row)
//     {
//         return new Question([
//             //
//         ]);
//     }
// }
// app/Imports/QuestionsImport.php

namespace App\Imports;

use App\Models\Question;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class QuestionsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Question([
            'challengeNumber' => $row['challengenumber'],
            'question_text'   => $row['question_text'],
            'marks'           => $row['marks'],
        ]);
    }
}
