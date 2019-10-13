<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }
    
    public function index()
    {
       //$this->authorize('viewAny');
       // abort_if('3'!==auth()->id(),403);
         $subjects=Subject::all();
        return view('subject.index',compact('subjects'));
    }

    
    public function create()
    {
        //\dd('o');
        return \view('subject.create');
    }

 
    public function store(Request $request)
    {
       
        Subject::create( $request->validate([
            'name' => 'required',
        ]));
       // Subject::create( $request->all());
        return \redirect('subject');
    }

    public function show(Subject $subject)
    {
        //dd($subject);
       return view('subject.show',compact('subject'));
    }

    
    public function edit(Subject $subject)
    {
       
        return view('subject.edit',compact('subject'));
    }

    public function update( Subject $subject)
    {
        //\dd($subject);
        request()->validate([
            'name' => 'required',
        ]);

        $subject->update(request(['name']));
         return \redirect('subject');

    }

    public function destroy(Subject $subject)
    {
        
     
        $subject->delete();
        return \redirect('subject');

    }
}
