<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Subject;
class SendMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public  $subject_name;
    public function __construct($subject)
    {
        $this->subject_name=$subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
   $address = 'ala96ala96@gmail.com';
    $name = 'علاء البدراني';
    $subject = 'New Course';
    return $this->markdown('email.send')
         ->from($address, $name)
        ->subject($subject)
        ->with('subject_name',$this->subject_name);
} 

}
