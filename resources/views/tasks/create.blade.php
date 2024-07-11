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
        <button type="submit">Create</button>
    </form>
</div>

@endsection
