<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

use App\Course;
use App\Subject;
use Illuminate\Support\Facades\Gate;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
        if (Gate::allows('Check-the-Admin')) {

            $subjects = Subject::all();
            return view('home', compact('subjects'));
        } else {
          return  redirect('/');
          
        }
    }
}
