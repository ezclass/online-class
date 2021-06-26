<?php

namespace App\Notifications;

use App\Broadcasting\SmsChannel;
use App\Models\Enrolment;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class Reminder extends Notification
{
    use Queueable;

    public function __construct(Enrolment $enrolment)
    {
        $this->enrolment = $enrolment;
    }

    public function via($notifiable)
    {
        return ['database', SmsChannel::class];
    }

    public function toArray($notifiable)
    {
        return [
            'data' => 'Pay this' . ' ' . "month's" . ' ' . 'tuition fee for' . ' ' .
                $this->enrolment->program->teacher->name . ' ' .
                "teacher's" . ' ' .
                $this->enrolment->program->subject->name . ' ' .
                'Class',
        ];
    }

    public function toSms($notifiable): SmsChannel
    {
        return (new SmsChannel())
            ->content('Pay this' . ' ' . "month's" . ' ' . 'tuition fee for' . ' ' .
                $this->enrolment->program->teacher->name . ' ' .
                "teacher's" . ' ' .
                $this->enrolment->program->subject->name . ' ' .
                'Class')
            ->to($this->enrolment->student->phone_number);
    }
}
