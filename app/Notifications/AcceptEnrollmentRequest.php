<?php

namespace App\Notifications;

use App\Broadcasting\SmsChannel;
use App\Models\Enrolment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AcceptEnrollmentRequest extends Notification
{
    use Queueable;

    private $enrolment;

    public function __construct(Enrolment $enrolment)
    {
        $this->enrolment = $enrolment;
    }

    public function via($notifiable)
    {
        return ['mail', 'database', SmsChannel::class];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('The enrollment request you sent to' . ' ' .
                $this->enrolment->program->teacher->name . ' ' .
                "teacher's" . ' ' .
                $this->enrolment->program->subject->name . ' ' .
                'Class was accepted')
            ->action('Go to the dashboard', url('/student/dashboard'))
            ->line('Thanks for using homeclass.lk');
    }

    public function toArray($notifiable)
    {
        return [
            'data' => 'The enrollment request you sent to' . ' ' .
                $this->enrolment->program->teacher->name . ' ' .
                "teacher's" . ' ' .
                $this->enrolment->program->subject->name . ' ' .
                'Class was accepted',
        ];
    }

    public function toSms($notifiable): SmsChannel
    {
        return (new SmsChannel())
            ->content('The enrollment request you sent to' . ' ' .
                $this->enrolment->program->teacher->name . ' ' .
                "teacher's" . ' ' .
                $this->enrolment->program->subject->name . ' ' .
                'Class was accepted')
            ->to($this->enrolment->student->phone_number);
    }
}
