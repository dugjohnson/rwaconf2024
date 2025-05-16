<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SponsorInfoRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
    }

    public function build(): self
    {
        return $this->markdown('emails.sponsor-info-request');
    }
}
