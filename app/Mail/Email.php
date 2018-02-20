<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Entite\Personnemoral;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    public $personne;
    public $type;
    public $urlDestination;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($type,$urlDestination,$personne)
    {
      $this->type = $type;
      $this->urlDestination = $urlDestination;
      $this->personne = $personne;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("monEmailSite@iea.com")->view('email');
    }
}
