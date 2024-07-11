// app/Imports/AnswersImport.php
namespace App\Imports;

use App\Models\Answer;
use Maatwebsite\Excel\Concerns\ToModel;

class AnswersImport implements ToModel
{
    public function model(array $row)
    {
        return new Answer([
            'question_id' => $row[0],  // Assuming the first column links to the question
            'answer_text' => $row[1],
            // map other columns as needed
        ]);
    }
}
