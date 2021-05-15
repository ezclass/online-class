<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Welcome extends Notification
{
    use Queueable;

    public function via($notifiable)
    {
        return ['database', 'mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('You have successfully registered with homeclass.lk')
            ->action('Go to the site', url('/'))
            ->line('Thanks for signing up for Homeclass.lk!');
    }

    public function toArray($notifiable)
    {
        return [
            'data' => 'You have successfully registered with homeclass.lk'
        ];
    }
}
