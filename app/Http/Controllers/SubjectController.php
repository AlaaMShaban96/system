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
        $subjects = Subject::all();
        return view('subject.index', compact('subjects'));
    }


    public function create()
    {
      
        config('verification.verification_code_expiry', 60);
        return view('subject.create');
    }


    public function store(Request $request)
    {
        Subject::create($request->validate([
            'name' => 'required',
        ]));
        
        return redirect('/home');
    }

    public function show(Subject $subject)
    {
       
        return view('subject.show', compact('subject'));
    }


    public function edit(Subject $subject)
    {

        return view('subject.edit', compact('subject'));
    }

    public function update(Subject $subject)
    {
      
        request()->validate([
            'name' => 'required',
        ]);

        $subject->update(request(['name']));
        return redirect('/home');
    }

    public function destroy(Subject $subject)
    {


        $subject->delete();
        return back();
    }
}
