<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Servis extends Mailable
{
    use Queueable, SerializesModels;

    public $request;


    public function __construct($istek)
    {
        $this->request = $istek;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $degerler = $this->request;
        return $this->view('parts.service', compact('degerler'));
    }
}
