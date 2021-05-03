<?php

namespace App\Broadcasting;

use App\Notifications\Notifications;

class SmsChannel
{
    public function __construct()
    {
    }

    public function send($notifiable, Notifications $notification)
    {
        $message = $notification->toSms($notifiable);
    }
}
