<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FowardContactMessage extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var
     */
    public $request;


    /**
     * Create a new message instance.
     *
     * @param $request
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.forwardContactMessage')
          ->subject($this->request->input('subject'));
    }
}
