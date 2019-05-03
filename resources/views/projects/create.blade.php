@extends('layout')

@section('content')
    <h1 class='title'>Create A New Project</h1>

    <form method="POST" action="/projects">
        {{csrf_field()}}

        <div class="field">

        <label class="label" for="title">Project Title</label>

            <div class="control">
                <input type="text" class="input {{$errors->has('title') ? 'is-danger' : ''}}" name="title" placeholder="Project Title" value="{{old('title')}}" required/>
            </div>
        </div>

        <div class="field">
        <label class="label" for="description">Project Description</label>
            
            <div class="control">
                <textarea name="description" class="textarea {{$errors->has('description') ? 'is-danger' : ''}}" placeholder="Project description" value="{{old('description')}}" required></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" name="submit">Create Project</button>
            </div>
        </div>

        @include('errors')
    </form>
    
@endsection