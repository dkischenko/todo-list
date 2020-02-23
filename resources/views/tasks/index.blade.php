@extends('layouts.app')

@section('title', $title)

@section('content')
    <a class="btn btn-primary" href="{{route('tasks.create')}}">Create new task</a>
    @forelse ($tasks as $task)
        <div>
            <p>{{ $task->title }}</p>
            @if($task->done)
                Done <i class="fa fa-check" aria-hidden="true"></i>
            @endif
        </div>
        <a href="{{route('tasks.edit', $task->id)}}" class="btn btn-info">edit</a>
    @empty
        <p>No tasks</p>
    @endforelse
@endsection
