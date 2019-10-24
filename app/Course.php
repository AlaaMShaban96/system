<?php

namespace App;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // protected static function boot(){
    //     parent::boot();
    //     static::created(function($course){

    //          Mail::to('codebriefly@yopmail.com')->send(new SendMailable($course->subject->name));
    //     });
    // }
    protected $fillable =['subject_id','t_id' ];
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
