@extends("layouts.app")

@section('title', 'Welcome')

@section('content')
    <a href="{{route("tasks.index")}}">Manage tasks</a>
@endsection
