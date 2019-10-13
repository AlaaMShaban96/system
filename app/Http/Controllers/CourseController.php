<?php

namespace App\Http\Controllers;

use App\Course;
use App\Subject;
use Illuminate\Http\Request;

class CourseController extends Controller
{
   
    public function index()
    {

        $courses= Course::all()->where('status','o');
       
        return view('course.index',compact("courses"));
    }

    
    public function create()
    {
        $subjects=Subject::all();
        return view('course.create',compact('subjects'));
    }

 
    public function store(Request $request)
    {
        $request()->validate(array(
            't_id' => 'required',
            'subject_id' => 'required',
        ));
        Course::Create($request(['']));
    }

    
    public function show(Course $course)
    {
        //
    }

  
    public function edit(Course $course)
    {
        //
    }

  
    public function update(Request $request, Course $course)
    {
        //
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('course');
        
    }
}
