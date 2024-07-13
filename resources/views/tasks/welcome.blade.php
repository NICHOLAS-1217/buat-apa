@extends('layouts.app')

@section('content')
    <div class="welcome_container">
        <div class="header">
            <a href="/" class="logo">BUATAPA</a>
            <nav class="navbar">
                <a href="/tasks">tasks</a>
                <a href="/tasks/create">add</a>
                <a href="/profile">profile</a>
            </nav>
        </div>
        <div class="texting_container">
            <div class="texting">
                <h1>Nak... Buat Ap0?</h1>
            </div>
        </div>
        <div class="main">
            <div class="vl">
                <h1>BUATAPA: Your Ultimate Productivity Companion</h1>
            </div>
            <p>BUATAPA is your ultimate productivity
            companion, designed to help you manage
            manage your tasks efficiently and
            effortlessly. Whether you have a hectic
            work schedule, personal errands, or a
            mix of both, BUATAPA ensures you stay
            organized and on top of your commitments.</p>
        </div>
        <div class="login">
            <a href="/login">
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/bjbmvfnr.json"
                    trigger="hover"
                    style="width:150px;height:150px">
                </lord-icon>
            </a>
            <p>login & berdikari sekarang!</p>
        </div>
        <div class="register">
            <a href="register">
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/gqftvyox.json"
                    trigger="hover"
                    style="width:150px;height:150px">
                </lord-icon>
            </a>
            <p>no account?</p>
        </div>
    </div>
@endsection