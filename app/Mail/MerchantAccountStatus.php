<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MerchantAccountStatus extends Mailable
{
    use Queueable, SerializesModels;

    public $merchant;
    public $accountStatus;
    public $type = 'merchant_account_status';

    public function __construct($merchant, $accountStatus)
    {
        $this->merchant = $merchant;
        $this->accountStatus = $accountStatus;
    }

    public function build()
    {
        $subjectKey = $this->accountStatus === 'approved' 
            ? 'merchant.account_approved.subject' 
            : 'merchant.account_rejected.subject';

        return $this->subject(trans($subjectKey))
                    ->view('emails.merchant.account_status')
                    ->with([
                        'merchant' => $this->merchant,
                        'accountStatus' => $this->accountStatus
                    ]);
    }
}
