<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WebhookConfiguration extends Mailable
{
    use Queueable, SerializesModels;

    public $merchant;
    public $webhookData;
    public $type = 'webhook_configuration';

    public function __construct($merchant, $webhookData)
    {
        $this->merchant = $merchant;
        $this->webhookData = $webhookData;
    }

    public function build()
    {
        return $this->subject(trans('webhook.configuration.subject'))
            ->view('emails.webhook.configuration')
            ->with([
                'merchant' => $this->merchant,
                'webhookData' => $this->webhookData
            ]);
    }
}
