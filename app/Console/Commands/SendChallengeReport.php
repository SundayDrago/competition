<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendChallengeReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-challenge-report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send challenge report to all participants';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $participants = Participant::all(); // Adjust this line to fetch all participants from your database

        foreach ($participants as $participant) {
            Mail::to($participant->email)->send(new SendReport);
        }
    }
}
