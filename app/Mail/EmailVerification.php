<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class EmailVerification extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $code;
    public function __construct($user, $code)
    {
        $this->user = $user;
        $this->code = $code;
    }

    public function build()
    {
        Log::info('Building email verification with code: ' . $this->code);
        return $this->subject(trans('emails.verification.subject'))
                    ->view('emails.fr.verification')
                    ->with([
                        'user' => $this->user,
                        'code' => $this->code
                    ]);
    }
}
