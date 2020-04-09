<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom, $mail, $mdp)
    {
        $this->name = $nom;
        $this->email = $mail;
        $this->password = $mdp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('bienvenu@hotmail.com')->subject($this->name.' tu es bien enregistré!')->view('mail.viewRegisterMail',compact('name','email','password'));
    }
}
