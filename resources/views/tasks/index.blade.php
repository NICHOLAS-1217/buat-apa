@extends('layouts.app')

@section('content')
    
    <div class="container">

        <h1>To-do tasks</h1>

        @foreach($tasks as $task)

            <div class="task">

                @if($task->isCompleted())
                    <span>completed</span>
                @endif

                <h2>{{ $task->title }}</h2>
                <p>{{ $task->description }}</p>
                @if(!$task->isCompleted())
                    <form action="/tasks/{{ $task->id }}" method="post">
                        @method('patch')
                        @csrf
                        <button input="submit">complete</button>
                    </form>
                @else
                    <form action="/tasks/{{ $task->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button input="submit">delete</button>
                    </form>
                @endif

            </div>

        @endforeach

        <a href="/tasks/create">create</a>
        
    </div>

@endsection
