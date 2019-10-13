@extends('course.layout')
@section('titel')
    Create Course
@endsection

@section('bode')
    <form action="course/store" method="post">
    @method('PATCH')
    @csrf
    <label for="t_id">Teacher ID</label><br>
    <input type="text" name="t_id" ><br>

    <div class="form-group">

         <label for="t_id">Teacher ID</label>

         <select multiple class="form-control" name="sbject_id" >

          @foreach ($subjects as $subject)

         <option value="{{$subject->id}}">{{$subject->name}}</option>

          @endforeach
        
         </select>
    </div>

    <input type="submit" value="Save">

    </form>
    
@endsection
