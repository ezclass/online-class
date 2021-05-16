<?php

namespace App\Notifications;

use App\Broadcasting\SmsChannel;
use App\Models\Program;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class EnrollmentRequest extends Notification
{
    use Queueable;

    private $program;

    public function __construct(Program $program)
    {
        $this->program = $program;
    }

    public function via($notifiable)
    {
        return ['mail', 'database', SmsChannel::class];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('An enrollment request has been received from' . ' ' .
                Auth::user()->name . ' ' . 'student for your' . ' ' .
                $this->program->subject->name . ' ' . ' class.')
            ->action('Go to the dashboard', url('/teacher/dashboard'));
    }

    public function toArray($notifiable)
    {
        return [
            'data' => 'An enrollment request has been received from' . ' ' .
                Auth::user()->name  . ' ' . 'student for your' . ' ' .
                $this->program->subject->name . ' ' . ' class.'
        ];
    }

    public function toSms($notifiable): SmsChannel
    {
        return (new SmsChannel())
            ->content('otp send');
    }
}
