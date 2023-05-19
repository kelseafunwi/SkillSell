<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command(
    'project:info',
    function () {
        echo "      -The name of this website is SkillSell, and its main aim is to help people \n
            -find jobs from different companies online, Help companies hire the right staff,\n
            -Help students find internships in their fields and get exposed to technology.\n";
    }
);

Artisan::command(
    'project:name',
    function () {
        echo "SkillSell\n";
    }
);
