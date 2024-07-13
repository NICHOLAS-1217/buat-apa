@extends("layouts.app")

@section("content")

    <div class="auth_container">
        <div class="title">
            <h1>login</h1>
        </div>
        <hr>
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