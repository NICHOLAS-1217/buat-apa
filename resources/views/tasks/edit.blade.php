@extends('layouts.app')
@section('content')
<div class="create_container">
    <div class="header">
        <a href="/" class="logo">
            <img src="{{ asset('images/turtle.svg') }}" width="40px" height="40px" alt="">
            BUATAPA
        </a>
        <nav class="navbar">
            <a href="/tasks">tasks</a>
            <a href="/profile">profile</a>
        </nav>
    </div>
    <div class="title">
        <h1>Edit Task</h1>
        <hr>
    </div>
    <div class="form">
        <div class="vl">
            <form action="/tasks/{{ $task->id }}" method="post">
                @csrf
                @method('PUT')
                <label for="title">title</label>
                <br>
                <input type="text" name="title" class="input" value="{{ $task->title }}">
                <br>
                <label for="description">description</label>
                <br>
                <textarea name="description" id="description" class="input">{{ $task->description }}</textarea>
                <br>
                <button type="submit" class="button">update</button>
            </form>
        </div>
    </div>
</div>
@endsection