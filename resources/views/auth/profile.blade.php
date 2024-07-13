@extends("layouts.app")

@section("content")

    <div class="profile_container">
        <div class="header">
            <a href="/" class="logo">BUATAPA</a>
            <nav class="navbar">
                <a href="/tasks">tasks</a>
                <a href="/tasks/create">add</a>
                <a href="/profile">profile</a>
            </nav>
        </div>
        <div class="title">
            <h1>profile</h1>
            <hr>
        </div>
        <div class="main">
            <table>
                <tr>
                    <td>username</td>
                    <td>{{$data->username}}</td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>{{$data->email}}</td>
                </tr>
                <tr>
                    <td><a href="/logout">logout</a></td>
                </tr>
            </table>
        </div>
    </div>

@endsection