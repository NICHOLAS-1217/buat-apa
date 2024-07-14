@extends("layouts.app")

@section("content")

    <div class="profile_container">
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
            <h1>profile</h1>
            <hr>
        </div>
        <div class="main">
            <script src="https://cdn.lordicon.com/lordicon.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/bgebyztw.json"
                trigger="hover"
                style="width:250px;height:250px">
            </lord-icon>
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
            </table>
            <div class="vl">
                <a href="/logout">
                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/gwvmctbb.json"
                        trigger="hover"
                        style="width:200px;height:200px">
                    </lord-icon>
                </a>
            </div>
            penat sudah?
        </div>
    </div>

@endsection