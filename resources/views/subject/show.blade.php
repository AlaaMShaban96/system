@extends('subject.layout')
@section('bode')
    
<div class="card-columns">
    <div class="card">
     
        <div class="card-body">

            <h4 class="card-title">{{$subject->name}}</h4>

           

                    <table class="table table-striped table-inverse table-responsive">

                        <thead class="thead-inverse">

                            <tr>
                                <th> Teacher ID</th>
                                
                                <th> Subject ID</th>
                                
                            </tr>

                            </thead>

                            <tbody>

                                @foreach ($subject->courses as $course)

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

                         <form action="/subject/{{$subject->id}}/course" method="post">
                           
                            @csrf
                            <label for="t_id">Teacher ID</label><br>
                            <input type="text" name="t_id" ><br>
                            <input type="submit" value="Add Course">

                        </form>
                        
                        @if ($errors->any())

                            @foreach ($errors->all() as $error)

                            <h3>{{$error}}</h3>
                                
                            @endforeach
                                
                        @endif
               </div>
          
        </div>
    </div>

    

@endsection