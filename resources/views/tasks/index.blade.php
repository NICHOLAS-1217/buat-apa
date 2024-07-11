@extends('layouts.app')

@section('content')

    <h1>To-do tasks</h1>

    @foreach($tasks as $task)

        <div class="task">

            @if($task->isCompleted())
                <span>completed</span>
            @endif

            <h2>{{ $task->title }}</h2>
            <p>{{ $task->description }}</p>
            <form action="/tasks/{{ $task->id }}" method="post">
                @method('patch')
                @csrf
                @if(!$task->isCompleted())
                    <button input="submit">complete</button>
                @endif
            </form>

        </div>

    @endforeach

    <a href="/tasks/create">create</a>

@endsection
