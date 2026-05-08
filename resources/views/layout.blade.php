<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BIJAKSATU SDN BHD</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header>
    <div class="logo">BIJAKSATU SDN BHD</div>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('courses') }}">Courses</a>
        <a href="{{ route('trainers') }}">Trainers / Coaches</a>
        <a href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('register') }}">Register</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <p>© 2026 BIJAKSATU SDN BHD. All Rights Reserved.</p>
</footer>

</body>
</html>