@extends('layout')

@section('content')

  <h2 class="title">edit the project : {{ $project->title }}</h2>

  <form action="/projects/{{$project->id}}" method="post">
    @csrf
    @method('PATCH')

    <div class="field">
      <label class="label">Title</label>
      <div class="control">
        <input class="input" type="text" name="title" value="{{ $project->title }}">
      </div>
    </div>

    <div class="field">
      <label class="label">Description</label>
      <div class="control">
        <textarea class="textarea" placeholder="" name="description">{{$project->description}}</textarea>
      </div>
    </div>

    <div class="control">
      <button class="button is-link" type="submit">Update project</button>
    </div>

  </form>

@endsection
