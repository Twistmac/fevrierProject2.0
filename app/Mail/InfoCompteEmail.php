<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Entite\Personnemoral;

class InfoCompteEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $personne;
    public $entite;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($entite,$personne)
    {
        $this->entite = $entite;
        $this->personne = $personne;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('infoCompteEmail');
    }
}
