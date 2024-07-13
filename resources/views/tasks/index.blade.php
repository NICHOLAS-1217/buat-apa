@extends('layouts.app')

@section('content')
    
    <div class="index_container">

        <div class="title">
            <h1>To-do tasks</h1>
        </div>


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

        <a href="/tasks/create">
            <script src="https://cdn.lordicon.com/lordicon.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/zrkkrrpl.json"
                trigger="hover"
                style="width:50px;height:50px">
            </lord-icon>
        </a>
        
    </div>

@endsection
