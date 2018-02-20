<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Entite\Personnemoral;

class ContratEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $type;
    public $personnemoral;
    public $condition;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($type,Personnemoral $personneMoral,$condition)
    {
        $this->type = $type;
        $this->personnemoral = $personneMoral;
        $this->condition = $condition;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("iea@hotmail.fr")->view('contratEmail');
    }
}
