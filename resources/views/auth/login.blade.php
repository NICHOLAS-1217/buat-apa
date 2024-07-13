@extends("layouts.app")

@section("content")

    <div class="auth_container">
        <div class="header">
            <a href="/" class="logo">BUATAPA</a>
            <nav class="navbar">
                <a href="/tasks">tasks</a>
                <a href="/tasks/create">add</a>
                <a href="#">profile</a>
            </nav>
        </div>
        <div class="title">
            <h1>login</h1>
            <hr>
        </div>
        <div class="icon">
            <script src="https://cdn.lordicon.com/lordicon.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/xzalkbkz.json"
                trigger="hover"
                style="width:250px;height:250px">
            </lord-icon>
        </div>
        <div class="form">
            <form action="">
                <label for="email">email</label><br>
                <input type="text" name="email" id="email"><br>
                <label for="password">password</label><br>
                <input type="password" name="password" id="password"><br>
                <button type="submit">confirm</button><br>
            </form>
        </div>
    </div>


@endsection