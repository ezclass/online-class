<?php

namespace App\Notifications;

use ApiChef\PayHere\Payment;
use App\Broadcasting\SmsChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PaymentSuccessTeacher extends Notification
{
    use Queueable;

    private $payment;

    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
    }

    public function via($notifiable)
    {
        return ['database', SmsChannel::class];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line($this->payment->payer->name . ' ' .
                'student has paid Rs.' .
                $this->payment->amount . ' ' .
                'for your' . ' ' .
                $this->payment->payable->subject->name . ' ' .
                'class.')
            ->action('Go to the dashboard', url('/teacher/dashboard'))
            ->line('Thanks for using homeclass.lk');
    }

    public function toArray($notifiable)
    {
        return [
            'data' => $this->payment->payer->name . ' ' .
                'student has paid Rs.' .
                $this->payment->amount . ' ' .
                'for your' . ' ' .
                $this->payment->payable->subject->name . ' ' .
                'class.'
        ];
    }

    public function toSms($notifiable): SmsChannel
    {
        return (new SmsChannel())
            ->content($this->payment->payer->name . ' ' .
                'student has paid Rs.' .
                $this->payment->amount . ' ' .
                'for your' . ' ' .
                $this->payment->payable->subject->name . ' ' .
                'class.')
            ->to($this->payment->payable->teacher->phone_number);
    }
}
