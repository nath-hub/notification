<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MerchantWelcome extends Mailable
{
    use Queueable, SerializesModels;

    public $merchant;
    public $type = 'merchant_welcome';

    public function __construct($merchant)
    {
        $this->merchant = $merchant;
    }

    public function build()
    {
        return $this->subject(trans('merchant.welcome.subject', ['name' => $this->merchant['business_name']]))
                    ->view('emails.merchant.welcome')
                    ->with([
                        'merchant' => $this->merchant
                    ]);
    }
}
