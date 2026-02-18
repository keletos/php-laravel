<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Site')</title>
    <meta name="description" content="Blade example">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<header class="header">
    <h1>Laravel App</h1>
</header>

<main class="container">
    @yield('content')
</main>

<footer class="footer">
    <p>© {{ date('Y') }}</p>
</footer>

</body>
</html>
