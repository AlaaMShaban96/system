<?php

namespace App\Listeners;

use App\Events\AddCourse;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class Send_Email_To_User
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AddCourse  $event
     * @return void
     */
    public function handle(AddCourse $event)
    {
        
        Mail::to('codebriefly@yopmail.com')->send(new SendMailable($event->subject_name));
    }
}
