<?php

namespace App\Notifications;

use App\Broadcasting\SmsChannel;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class VerifyAccount extends Notification
{
    use Queueable;
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function via($notifiable)
    {
        return ['database', SmsChannel::class];
    }

    public function toArray($notifiable)
    {
        return [
            'data' => 'Hello' . ' ' . $this->user->name . ' ' .
                'Your homeclass.lk account has been verified.' . ' ' .
                "We're" . ' ' . 'glad you use homeclass.lk.',
        ];
    }

    public function toSms($notifiable): SmsChannel
    {
        return (new SmsChannel())
            ->content('Hello' . ' ' . $this->user->name . ' ' .
                'Your homeclass.lk account has been verified.' . ' ' .
                "We're" . ' ' . 'glad you use homeclass.lk.')
            ->to($this->user->phone_number);
    }
}
