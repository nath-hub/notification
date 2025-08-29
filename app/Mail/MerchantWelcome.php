<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MerchantWelcome extends Mailable
{
    use Queueable, SerializesModels;

    public $merchant;
    public $user;
    public $type = 'merchant_welcome';

    public function __construct($merchant, $user)
    {
        $this->merchant = $merchant;
        $this->user = $user;
    }

    public function build()
    {
        return $this->subject(trans('merchant.welcome.subject', ['name' => $this->merchant]))
                    ->view('emails.merchant.fr.welcome')
                    ->with([
                        'merchant' => $this->merchant,
                        'nom_entreprise' => $this->merchant,
                        'contact_name' => $this->user->name,
                        'contact_email' => $this->user->email
                    ]);
    }
}
