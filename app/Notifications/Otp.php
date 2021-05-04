<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

class Otp extends Notification
{
    use Queueable;

    public function __construct()
    {
    }

    public function via($notifiable)
    {
        return $notifiable->prefers_sms ? ['textit'] : ['mail'];
    }

    public function toOtp($notifiable)
    {

    }

    public function toArray($notifiable)
    {
        return [];
    }
}
