<?php

namespace App;
use App\Course;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable=[
        "name"
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function addCourses($t_id)
    {

        $this->courses()->create(compact('t_id'));
        // return  Course::Create(
        //             [
        //                 'subject_id'=>$this->id,
        //                 't_id'=>$t_id
        //             ]
        //             );
    }
}
