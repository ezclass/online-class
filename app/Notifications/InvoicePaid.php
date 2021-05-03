<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class InvoicePaid extends Notification
{
    use Queueable;

    public function __construct()
    {
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $url = url('/student-payment-history/'.$this->enrolment->id.$this->user->id);

        return (new MailMessage)->markdown('mail.invoice.paid')
        ->subject('Invoice Paid')
        ->markdown('mail.invoice.paid', ['url' => $url]);
    }

    public function toArray($notifiable)
    {
        return [];
    }
}
