@extends('layout')

@section('content')

  <h2 class="title">create a new Project</h2>

  <form action="/projects" method="post">
    @csrf

    <div class="field">
      <label class="label">Title</label>
      <div class="control">
        <input class="input" type="text" name="title">
      </div>
    </div>

    <div class="field">
      <label class="label">Description</label>
      <div class="control">
        <textarea class="textarea" placeholder="" name="description"></textarea>
      </div>
    </div>

    <div class="control">
      <button class="button is-link" type="submit">Submit</button>
    </div>

  </form>

@endsection
