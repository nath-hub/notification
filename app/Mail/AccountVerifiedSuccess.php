<?php

namespace App\Mail;

use Illuminate\Bus\Queueable; 
use Illuminate\Mail\Mailable; 
use Illuminate\Queue\SerializesModels;

class AccountVerifiedSuccess extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $verificationDate;
    public $verificationTime;

    public function __construct($user, $verificationDate, $verificationTime)
    {
        $this->user = $user;
        $this->verificationDate = $verificationDate;
        $this->verificationTime = $verificationTime;
    }

    public function build()
    {
        return $this->subject(trans('emails.account_verified.subject'))
            ->view('emails.account_verified_success')
            ->with([
                'user' => $this->user,
                'verificationDate' => $this->verificationDate,
                'verificationTime' => $this->verificationTime
            ]);
    }
}
