<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
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

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->mailer('postmark')
            ->line('The introduction to the notification.')
            ->action('Click to go to the site', url('/'))
            ->line('Thank you for using homeclass.lk!');
    }

    public function toArray($notifiable)
    {
        return [];
    }
}
