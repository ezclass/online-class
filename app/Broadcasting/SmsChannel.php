<?php

namespace App\Broadcasting;

use App\Notifications\Otp;

class SmsChannel
{
    public function __construct()
    {
    }

    public function send($notifiable, Otp $notification)
    {
        $message = $notification->toOtp($notifiable);
    }
}
