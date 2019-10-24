<?php

namespace App\Http\Controllers;

use App\Events\AddCourse;

use App\Subject;
use App\Course;
use Illuminate\Http\Request;


class SubjectCoursesController extends Controller
{
    public function store(Subject $subject)
    {

        request()->validate(array(
            't_id' => 'required',
        ));
        
        $subject->addCourses(request('t_id'));

        event(new AddCourse($subject->name));

        return view('course.create')->with('subject', $subject);
    }
}
