<?php

namespace App\Imports;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class AnswersImport implements ToCollection, WithHeadingRow
{
    public $data;

    public function collection(Collection $rows)
    {
        $this->data = $rows;
    }
}
