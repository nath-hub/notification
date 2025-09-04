<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

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

        $status = $this->kycStatus[0]['statut_kyb'] ?? 'rejete';

        $subjectKey = $this->kycStatus[0]['statut_kyb'] === 'approuve'
            ? 'merchant.kyc_approved.subject'
            : 'merchant.kyc_rejected.subject';

        $merchantData = is_object($this->merchant) ? $this->merchant : (object) $this->merchant;
        $kycData = is_array($this->kycStatus) ? $this->kycStatus : [];


        // Variables à passer à la vue
        $variables = [
            'kycStatus' => (string) $status,
            'contact_name' => (string) ($merchantData->name ?? $merchantData->contact_name ?? 'Cher partenaire'),
            'business_name' => (string) ($kycData[0]['nom_entreprise'] ?? $merchantData->nom_entreprise ?? 'Votre entreprise'),
            'motif_statut' => (string) ($kycData[0]['motif_statut'] ?? ''),
            'kyc_reference' => (string) ($kycData[0]['id'] ?? 'N/A'),
            'status' => $this->kycStatus[0]['statut_kyb'],
            'merchant' => $merchantData,
            'transactionData' => $kycData,
        ];

        // Debug pour identifier le problème
        Log::info('Email variables types:', [
            'kycStatus_type' => gettype($variables['kycStatus']),
            'contact_name_type' => gettype($variables['contact_name']),
            'business_name_type' => gettype($variables['business_name']),
            'variables' => $variables
        ]);

        return $this->subject(trans($subjectKey))
            ->view('emails.merchant.fr.kyc_validation')
            ->with($variables);
    }
}
