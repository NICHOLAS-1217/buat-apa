@extends('layouts.app')

@section('content')

<div class="container">
    <h1>New Task</h1>

    <form action="/tasks" method="post">
        @csrf
        <label for="title">title</label>
        <br>
        <input type="text" name="title">
        <br>
        <label for="description">description</label>
        <br>
        <input type="text" name="description">
        <br>
        <button type="submit">
            <script src="https://cdn.lordicon.com/lordicon.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/zrkkrrpl.json"
                trigger="hover"
                style="width:50px;height:50px">
            </lord-icon>
        </button>
    </form>
</div>

@endsection
