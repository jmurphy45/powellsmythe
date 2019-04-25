<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        if(app()->environment() === 'production'){
            $emails = [$this->data->email];
//        }else{
//            $emails = [ $this->data->email];
//        }

        return $this->markdown('mail.contact_us')
            ->to($this->data->email)
            ->bcc(['biggspowell@yahoo.com','gracey@graceysmythe.com'])
            ->subject('New message from powellsmythe.com');
    }
}
