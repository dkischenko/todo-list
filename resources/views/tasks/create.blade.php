@extends('layouts.app')

@section('title', $title)

@section('content')
    <a href="{{route('tasks.index')}}">Back</a>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input class="title" id="title" type="text" maxlength="255" name="title">
        </div>
        <div>
            <label for="done">Done:</label>
            <input class="done" id="done" type="checkbox" name="done" value=1>
        </div>
        <button type="submit" class="btn btn-info">Save</button>
    </form>
@endsection
