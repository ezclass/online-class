<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AcceptEnrollmentRequest extends Notification
{
    use Queueable;

    public function __construct()
    {
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Your enrollment request was accepted')
            ->action('Go to the dashboard', url('/student/dashboard'))
            ->line('Thanks for using homeclass.lk');
    }

    public function toArray($notifiable)
    {
        return [
            'data' => 'Your enrollment request was accepted'
        ];
    }
}
