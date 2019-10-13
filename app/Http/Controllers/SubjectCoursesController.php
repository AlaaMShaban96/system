<?php

namespace App\Http\Controllers;
use App\Subject;
use App\Course;
use Illuminate\Http\Request;


class SubjectCoursesController extends Controller
{
    public function store(Subject $subject )
    {
        request()->validate(array(
            't_id' => 'required',
        ));
        $subject->addCourses(request('t_id'));

        return redirect('subject/'.$subject->id.'/show');
    }
}
