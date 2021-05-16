<?php

namespace App\Notifications;

use ApiChef\PayHere\Payment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PaymentSuccessful extends Notification
{
    use Queueable;

    private $payment;

    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('For the' . ' ' .
                $this->payment->payable->subject->name . ' ' .
                'class of the' . ' ' .
                $this->payment->payable->teacher->name . ' ' .
                'teacher,' . ' ' .
                'your payment was successful.')
            ->action('Go to the dashboard', url('/student/dashboard'))
            ->line('Thanks for using homeclass.lk');
    }

    public function toArray($notifiable)
    {
        return [
            'data' => 'For the' . ' ' .
                $this->payment->payable->subject->name . ' ' .
                'class of the' . ' ' .
                $this->payment->payable->teacher->name . ' ' .
                'teacher,' . ' ' .
                'your payment was successful.'
        ];
    }
}
