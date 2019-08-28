<?php


namespace App\Listeners\User;


use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Log;

class RegisterLogger
{
    public function handle(Registered $event)
    {
        $logRow = 'New registration: '.$event->user->name.', email: '.$event->user->email.' in: '.Carbon::now();
        Log::channel('registrationLog')->info($logRow);
//        Log::info($logRow);
    }
}
