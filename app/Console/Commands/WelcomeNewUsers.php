<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WelcomeNewUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:newsusers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends an Email to all the users of this website.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        User::signedUpThisweek()->each(function ($user) {
            Mail::send(
                'emails.welcome',
                ['name' => $user->fullname],
                function ($m) use ($user) {
                    $m->to($user->email)->subject("Welcome!");
                }
            );
        });
        return Command::SUCCESS;
    }
}
