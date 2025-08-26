<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PaymentPending extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $transaction;
    public $type = 'pending';

    public function __construct($user, $transaction)
    {
        $this->user = $user;
        $this->transaction = $transaction;
    }

    public function build()
    {
        return $this->subject(trans('payments.pending.subject', $this->getTranslationParams()))
                    ->view('emails.payments.pending')
                    ->with([
                        'user' => $this->user,
                        'transaction' => $this->transaction
                    ]);
    }

    protected function getTranslationParams()
    {
        return [
            'amount' => $this->transaction['amount'],
            'currency' => $this->transaction['currency']
        ];
    }
}
