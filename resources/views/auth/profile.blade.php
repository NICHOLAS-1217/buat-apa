@extends("layouts.app")

@section("content")

    <div class="profile_container">
        <div class="header">
            <a href="/" class="logo">BUATAPA</a>
            <nav class="navbar">
                <a href="/tasks">tasks</a>
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
                    <td>
                        <div class="vl">
                            username
                        </div>
                    </td>
                    <td>{{$data->username}}</td>
                </tr>
                <tr>
                    <td>
                        <div class="vl">
                            email
                        </div>
                    </td>
                    <td>{{$data->email}}</td>
                </tr>
                penat sudah?
                <div class="vl">
                    <a href="/logout">logout</a>
                </div>
            </table>
        </div>
    </div>

@endsection