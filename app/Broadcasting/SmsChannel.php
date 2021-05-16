<?php

namespace App\Broadcasting;

use App\Models\User;
use Illuminate\Notifications\Notification;

class SmsChannel
{
    private $content;

    public function __construct()
    {
    }

    public function join(User $user)
    {
    }

    public function send($notifiable, Notification $notification)
    {

        $message = $notification->toSms($notifiable);

        $user = config('services.sms.key');
        $password = config('services.sms.secret');
        $to = "94775486681";
        $text = urlencode($message->content);

        $baseurl = "http://www.textit.biz/sendmsg";
        $url = "$baseurl/?id=$user&pw=$password&to=$to&text=$text";
    }

    public function content(string $content)
    {
        $this->content = $content;

        return $this;
    }
}
