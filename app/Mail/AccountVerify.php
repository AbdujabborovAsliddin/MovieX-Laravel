<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Console\Application;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AccountVerify extends Mailable
{
    use Queueable, SerializesModels;

    public $verificationCode;
    public function __construct($verificationCode)
    {
        $this->verificationCode = $verificationCode;
    }

    public function build()
    {
        return $this->from('m@gmail.com', 'Moderator')
                    ->subject("Your verification code: $this->verificationCode")
                    ->view('email')
                    ->with('verificationCode', $this->verificationCode);
    }
}
