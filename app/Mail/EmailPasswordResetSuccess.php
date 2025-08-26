<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailPasswordResetSuccess extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $date;
    public $time;

    public function __construct(User $user, string $date, string $time)
    {
        $this->user = $user;
        $this->date = $date;
        $this->time = $time;
    }

    public function build()
    {
        return $this->subject(trans('emails.password_reset.subject'))
            ->view('emails.fr.password_reset_success')
            ->with([
                'user' => $this->user,
                'date' => $this->date,
                'time' => $this->time,
            ]);
    }
}
