<?php

namespace App\Http\Controllers;

use App\Course;
use App\Subject;
use App\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {

        $courses = Course::all()->where('status', 'o');

        return view('course.index', compact("courses"));
    }


    public function create()
    {
        $subjects = Subject::all();
        return view('course.create', compact('subjects'));
    }


    public function store(Request $request)
    {
        $request()->validate([
            't_id' => 'required',
            'subject_id' => 'required',
        ]);
        Course::Create($request(['']));
    }


    public function show(Subject $subject)
    {

        return view('course.create', compact('subject'));
    }


    public function edit(Course $course)
    {

        $users = User::where('email', '!=', 'foo@foo.com')->where('id', '!=', $course->t_id)->get();


        return view('course.edit', compact('course', 'users'));
    }


    public function update(Course $course)
    {
        request()->validate([
            't_id' => 'required',
        ]);

        $course->update(request(['t_id']));

        return view('course.create')->with('subject', $course->subject);
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return view('course.create')->with('subject', $course->subject);
    }

    public function create_course(Subject $subject)
    {
        $users = User::where('email', '!=', 'foo@foo.com')->get();

        return view('course.create-course',compact('subject','users'));
    }
}
