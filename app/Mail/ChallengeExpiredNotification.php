<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Challenge;

class ChallengeExpiredNotification extends Mailable
{
    
    use Queueable, SerializesModels;

    public $challenge;
    public $questionsWithAnswers;

    public function __construct($challenge, $questionsWithAnswers)
    {
        $this->challenge = $challenge;
        $this->questionsWithAnswers = $questionsWithAnswers;
    }

    public function build()
    {
        return $this->view('emails.challenge_expired')
                    ->with([
                        'challenge' => $this->challenge,
                        'questionsWithAnswers' => $this->questionsWithAnswers,
                    ]);
    }
}
