<?php

namespace App\Events;


use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AddCourse
{
    use Dispatchable, SerializesModels;

    public $subject_name; 
    public function __construct($subject_name)
    {
        $this->subject_name = $subject_name;
    }

   
}
