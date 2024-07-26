<?php

namespace App\Console\Commands;

use App\Models\Challenge;
use Illuminate\Console\Command;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\ChallengeExpiredNotification;
use App\Models\Answers;
use App\Models\Questions;
use App\Models\Attempt;
use App\Models\Participants;

class SendChallengeExpiryNotifications extends Command
{
    protected $signature = 'challenges:notify-expiry';
    protected $description = 'Send email notifications for challenges that have expired';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $expiredChallenges = Challenge::where('end_date', '<', Carbon::now())->get();

        if ($expiredChallenges->isNotEmpty()) {
            foreach ($expiredChallenges as $challenge) {
                $questions = Questions::where('challengeNumber', $challenge->challengeNumber)->get();
                $questionsWithAnswers = [];

                foreach ($questions as $question) {
                    // Find corresponding answer for each question
                    $answer = Answers::where('question_id', $question->id)->first();

                    // Push question and answer to the array
                    $questionsWithAnswers[] = [
                        'question' => $question->question_text,
                        'answer' => $answer ? $answer->answer_text : 'No answer found',
                    ];
                }
                // Get participants who attempted the challenge
                $attempts = Attempt::where('challengeNumber', $challenge->challengeNumber)->distinct('username')->get();
                
                foreach ($attempts as $attempt) {

                    // Get participant's email
                    $participant = Participants::where('studentNumber', $attempt->studentNumber)->first();
                    $participantEmail = $participant ? $participant->email : null;
                    printf($participantEmail);

                    if ($participantEmail) {
                        // Send email
                        printf($participantEmail);
                        Mail::to($participantEmail)->send(new ChallengeExpiredNotification($challenge, $questionsWithAnswers));
                    }
                }
            }

            $this->info('Challenge emails sent successfully.');
        } else {
            $this->info('No expired challenges found.');
        }
    }
}
