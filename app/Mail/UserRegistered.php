<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserRegistered extends Mailable
{
    use Queueable, SerializesModels;

    use Queueable, SerializesModels;

    public $user; 

    public function __construct(User $user)
    {
        $this->user = $user; 
    }

    public function build()
    {
        return $this->subject(trans('emails.welcome.subject'))
            ->view('emails.fr.welcome')
            ->with([
                'user' => $this->user, 
            ]);
    }
}
