<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable =['subject_id','t_id' ];
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
