@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Subject</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <table class=" col-8 table ">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Name </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subjects as $subject)

                            <tr>
                                <td scope="row">{{$subject->id}}</td>
                                <td>{{$subject->name}}</td>
                                <td>
                                    <form action="subject/{{$subject->id}}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>

                                <td>
                                    <form action="subject/{{$subject->id}}/edit" method="GET">

                                        <button type="submit" class="btn btn-warning">Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="/course/{{$subject->id}}" method="GET">

                                        <button type="submit" class="btn btn-info">Add Courses</button>
                                    </form>
                                </td>

                            </tr>
                            @endforeach
                    </table>

                    <form action="subject/create" method="GET">

                        <button type="submit" class="btn btn-success">Create</button>

                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection