<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Iletisim extends Mailable
{
    use Queueable, SerializesModels;


    public $gonderi;


    public function __construct($request)
    {
        $this->gonderi = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $gonderi = $this->gonderi;
        return $this->view('mail.iletisim', compact('gonderi'));
    }
}
