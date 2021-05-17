<?php

namespace App\Broadcasting;

use App\Models\User;
use Illuminate\Notifications\Notification;

class SmsChannel
{
    private $content;
    private $to;

    public function __construct()
    {
    }

    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toSms($notifiable);
        $user = config('services.sms.key');
        $password = config('services.sms.secret');
        $to = $message->to;
        $text = urlencode($message->content);
        $baseurl = "http://www.textit.biz/sendmsg";
        $url = "$baseurl/?id=$user&pw=$password&to=$to&text=$text";
        $ret = file($url);
    }

    public function content(string $content)
    {
        $this->content = $content;

        return $this;
    }
    public function to(string $to)
    {
        $this->to = $to;

        return $this;
    }
}
