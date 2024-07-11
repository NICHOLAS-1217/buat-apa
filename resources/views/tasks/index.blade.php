@extends('layouts.app')

@section('content')

    <h1>To-do tasks</h1>

    @foreach($tasks as $task)
        <div class="task">
            <h2>{{ $task->title }}</h2>
            <p>{{ $task->description }}</p>
        </div>
    @endforeach

@endsection
