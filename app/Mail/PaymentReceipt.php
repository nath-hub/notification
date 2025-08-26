<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PaymentReceipt extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $transaction;
    public $type = 'receipt';

    public function __construct($user, $transaction)
    {
        $this->user = $user;
        $this->transaction = $transaction;
    }

    public function build()
    {
        return $this->subject(trans('payments.receipt.subject', $this->getTranslationParams()))
            ->view('emails.payments.fr.receipt')
            ->with([
                'user' => $this->user,
                'transaction' => $this->transaction
            ]);
    }

    protected function getTranslationParams()
    {
        return [
            'amount' => $this->transaction['amount'],
            'currency' => $this->transaction['currency'],
            'id' => $this->transaction['id']
        ];
    }
}
