@extends("layouts.app")

@section("content")

    <div class="auth_container">
        <div class="header">
            <a href="/" class="logo">BUATAPA</a>
            <nav class="navbar">
                <a href="/tasks">tasks</a>
                <a href="/profile">profile</a>
            </nav>
        </div>
        <div class="title">
            <h1>Register</h1>
            <hr>
        </div>
        <div class="icon">
            <script src="https://cdn.lordicon.com/lordicon.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/qitvuzec.json"
                trigger="hover"
                style="width:250px;height:250px">
            </lord-icon>
        </div>
        <div class="form">
            <div class="vl">
                <form action="{{route('register_user')}}" method="post">
                    @csrf
                    <label for="username">username</label><br>
                    <input type="text" name="username" id="username" value="{{old('username')}}" class="input"><br>
                    <span>
                        @error('username')
                            {{$message}}
                        @enderror
                    </span><br>
                    <label for="email">email</label><br>
                    <input type="text" name="email" id="email" value="{{old('password')}}" class="input"><br>
                    <span>
                        @error('email')
                            {{$message}}
                        @enderror
                    </span><br>
                    <label for="password">password</label><br>
                    <input type="password" name="password" id="password" class="input"><br>
                    <span>
                        @error('password')
                            {{$message}}
                        @enderror
                    </span><br>
                    <button type="submit" class="button">confirm</button><br>
                    @if(Session::has('success'))
                        <span>
                            {{Session::get('success')}}
                        </span><br>
                    @endif
                    @if(Session::has('fail'))
                        <span>
                            {{Session::get('fail')}}
                        </span><br>
                    @endif
                </form>
            </div>
        </div>
    </div>


@endsection