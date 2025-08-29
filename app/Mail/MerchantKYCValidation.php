<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MerchantKYCValidation extends Mailable
{
    use Queueable, SerializesModels;

     public $merchant;
    public $kycStatus;
    public $type = 'kyc_validation';

    public function __construct($merchant, $kycStatus)
    {
        $this->merchant = $merchant;
        $this->kycStatus = $kycStatus;
    }

    public function build()
    {
        $subjectKey = $this->kycStatus === 'approved'
            ? 'merchant.kyc_approved.subject'
            : 'merchant.kyc_rejected.subject';

        return $this->subject(trans($subjectKey))
                    ->view('emails.merchant.fr.kyc_validation')
                    ->with([
                        'merchant' => $this->merchant,
                        'kycStatus' => $this->kycStatus
                    ]);
    }
}
