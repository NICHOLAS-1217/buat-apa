<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Apa?</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="welcome-container">
        <div class="header">
            <a href="/" class="logo">BUATAPA</a>
            <nav class="navbar">
                <a href="/tasks">tasks</a>
                <a href="/tasks/create">add</a>
                <a href="#">profile</a>
            </nav>
        </div>
        @yield('content')
    </div>
</body>
</html>