@extends('layouts.app')

@section('content')


<div class="card text-left">

  <div class="card-body">
    <h4 class="card-title">Edit Course {{ $course->subject->name }}</h4>

    <form action="/course/{{ $course->id }}" method="post">
      @method('PATCH')
      @csrf

      <div class="form-group">

        <label for="t_id">Select Teacher</label>

        <select multiple class="form-control" name="t_id">

          @foreach ($users as $user)

          <option value="{{ $user->id }}">{{ $user->name }} </option>

          @endforeach


        </select>
      </div>

      <button type="submit" class="btn btn-info">Update </button>
    </form>
    @if ($errors->any())

    @foreach ($errors->all() as $error)

    <h3>{{$error}}</h3>

    @endforeach

    @endif
  </div>
</div>
@endsection