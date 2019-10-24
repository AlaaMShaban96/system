@extends('layouts.app')

@section('content')


<table class="table">
    <thead>
        <tr>
            <th>Course ID</th>
            <th>Teacher ID</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subject->courses as $course)
        <tr>
            <td>{{ $course->id }}</td>
            <td>{{ $course->t_id }}</td>


            <td>
                <form action="/course/{{ $course->id }}" method="post">

                    @method('DELETE')

                    @csrf

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

            <td>
                <form action="/course/{{ $course->id }}/edit" method="get">
                    <button type="submit" class="btn btn-info">Edit </button>
                </form>
            </td>


        </tr>
        @endforeach

    </tbody>
</table>
<form action="/course/{{$subject->id}}/create" method="GET">

    <button type="submit" class="btn btn-success">Create Course</button>

</form>
@endsection