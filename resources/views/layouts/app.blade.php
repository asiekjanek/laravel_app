<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>

    <h1>Moja aplikacja Laravel</h1>

    <hr>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @yield('content')

</body>
</html>