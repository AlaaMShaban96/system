@extends('subject.layout')

@section('bode')
    
<form action="/subject/store" method="post">
   @csrf
  
    <input type="text" name="name">
    
    <input type="submit" value="Save">
</form>
@if ($errors->any())

@foreach ($errors->all() as $error)
  <h3>{{$error}}</h3>  
@endforeach
    
@endif

@endsection