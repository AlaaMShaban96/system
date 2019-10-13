@extends('subject.layout')

@section('bode')


<form action="/subject/{{$subject->id}}/update" method="post">
    @method('PATCH')
    @csrf
        <input type="text" name="name" value="{{$subject->name}}">
        <input type="submit" value="update">

</form>
@if ($errors->any())

@foreach ($errors->all() as $error)
   
<h3>{{$error}}</h3>
@endforeach
@endif

@endsection