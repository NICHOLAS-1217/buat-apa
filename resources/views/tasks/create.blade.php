@extends('layouts.app')

@section('content')

<div class="create_container">

    <div class="header">
        <a href="/" class="logo">BUATAPA</a>
        <nav class="navbar">
            <a href="/tasks">tasks</a>
            <a href="/profile">profile</a>
        </nav>
    </div>
    <div class="title">
        <h1>New Task</h1>
        <hr>
    </div>
    <div class="form">
        <div class="vl">
            <form action="/tasks" method="post">
                @csrf
                <label for="title">title</label>
                <br>
                <input type="text" name="title" class="input">
                <br>
                <label for="description">description</label>
                <br>
                <textarea name="description" id="description" class="input"></textarea>
                <br>
                <button type="submit" class="button">create</button>
            </form>
        </div>
    </div>
</div>

@endsection
