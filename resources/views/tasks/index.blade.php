@extends('layouts.app')

@section('content')
    
    <div class="index_container">

        <div class="header">
            <a href="/" class="logo">BUATAPA</a>
            <nav class="navbar">
                <a href="/tasks">tasks</a>
                <a href="/tasks/create">add</a>
                <a href="#">profile</a>
            </nav>
        </div>

        <div class="title">
            <h1>To-do tasks</h1>
            <hr>
        </div>
        <div class="content">
            @foreach($tasks as $task)

            <div class="vl">

                @if($task->isCompleted())
                    <span>completed</span>
                @endif

                <h2>{{ $task->title }}</h2>
                <p>{{ $task->description }}</p>
                @if(!$task->isCompleted())
                    <form action="/tasks/{{ $task->id }}" method="post">
                        @method('patch')
                        @csrf
                        <button input="submit">
                            <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/cgzlioyf.json"
                                trigger="hover"
                                style="width:50px;height:50px">
                            </lord-icon>
                        </button>
                    </form>
                @else
                    <form action="/tasks/{{ $task->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button input="submit">
                            <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/drxwpfop.json"
                                trigger="hover"
                                style="width:50px;height:50px">
                            </lord-icon>    
                        </button>
                    </form>
                @endif

            </div>

            @endforeach
            <div class="create">
                <a href="/tasks/create">
                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/zrkkrrpl.json"
                        trigger="hover"
                        style="width:50px;height:50px">
                    </lord-icon>
                </a>
            </div>
        </div>

        
    </div>

@endsection
