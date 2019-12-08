@extends('layout');

@section('content')

  <h2 class="title">Look at my projects !</h2>

  @foreach ($projects as $project)
    <li>
      <a href="/projects/{{ $project->id }}/edit">
        {{ $project->title}}
      </a>
    </li>
  @endforeach

@endsection
