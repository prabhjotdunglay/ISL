<?php

namespace App\Mail;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->data = $user;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'Visitormanagement@gmaul.com';
        $subject = 'Thank You For Purchasing !';
        $name = 'Visitor Management System ';
        $user = new User();
        return $this->view('emails.Welcome')
            ->from($address, $name)
            ->cc($address, $name)
            ->bcc($address, $name)
            ->replyTo($address, $name)
            ->subject($subject)
            ->with([ 'bomessage' => $this->data['message'] ]);

    }
}
