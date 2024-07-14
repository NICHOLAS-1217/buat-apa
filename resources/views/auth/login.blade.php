@extends("layouts.app")

@section("content")

    <div class="auth_container">
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
            <h1>Login</h1>
            <hr>
        </div>
        <div class="icon">
            <script src="https://cdn.lordicon.com/lordicon.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/xzalkbkz.json"
                trigger="hover"
                style="width:250px;height:250px">
            </lord-icon>
            <p>new user?</p>
            <br>
            <div class="vl">
                <a href="/register">
                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/ghhwiltn.json"
                        trigger="hover"
                        colors="primary:#000000,secondary:#000000"
                        style="width:40px;height:40px">
                    </lord-icon>
                </a>
            </div>
        </div>
        <div class="form">
            <div class="vl">
            <form action="{{route('login_user')}}" method=“get”>
                @csrf
                <label for="username">username</label><br>
                    <input type="text" name="username" id="username" value="{{old('username')}}" class="input"><br>
                    <span>
                        @error('username')
                            <div class="error">
                                {{$message}}
                            </div>
                        @enderror
                </span><br>
                <label for="email">email</label><br>
                <input type="text" name="email" id="email" class="input"><br>
                <span>
                    @error('email')
                        <div class="error">
                                {{$message}}
                        </div>
                    @enderror
                </span><br>
                <label for="password">password</label><br>
                <input type="password" name="password" id="password" class="input"><br>
                <span>
                    @error('password')
                        <div class="error">
                            {{$message}}
                        </div>
                    @enderror
                </span><br>
                <button type="submit" class="button">
                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/stxfyhky.json"
                        trigger="hover"
                        colors="primary:#000000,secondary:#ffffff"
                        style="width:150px;height:40px">
                    </lord-icon>
                </button><br>
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