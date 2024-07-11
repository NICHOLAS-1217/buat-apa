@extends('layouts.app')

@section('content')

<h1>New Task</h1>

<form action="/tasks/create" method="post">
    <label for="task_description">Task Description</label>
    <br>
    <input type="text" name="task_description">
    <br>
    <button type="submit">Create</button>
</form>

@endsection
