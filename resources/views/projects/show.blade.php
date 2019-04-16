@extends('layout')

@section('content')
    <h1 class="title">{{$project->title}}</h2>

    <div class="content">
        {{$project->description}}
    </div>

    <p>
        <a href="/projects/{{$project->id}}/edit">Edit</a>
    </p>
@endsection