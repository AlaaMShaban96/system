@extends('course.layout')
@section('titel')
    courses
@endsection

@section('bode')


<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th> Teacher ID</th>
            <th> Subject ID</th>
            
        </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
               <tr>
                    <td scope="row">{{$course->t_id}}</td>
                    <td>{{$course->subject_id}}</td>
                 
                    <td>
                        <form action="/course/{{$course->id}}" method="post">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value=" delete">
                        </form> 
                    </td>
            </tr> 
            @endforeach
            
           
        </tbody>
</table>
<form action="course/create" method="get">
<input type="submit" value="Create">
</form>
    
     
@endsection