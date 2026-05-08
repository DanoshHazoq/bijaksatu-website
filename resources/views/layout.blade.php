<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BIJAKSATU SDN BHD</title>

    <!-- FORCE CSS LOAD -->
    <link rel="stylesheet" href="/css/style.css?v=20260508">

</head>

<body>

    <!-- HEADER -->

    <header>

        <div class="logo">
            BIJAKSATU SDN BHD
        </div>

        <nav>

            <a href="{{ route('home') }}">
                Home
            </a>

            <a href="{{ route('about') }}">
                About
            </a>

            <a href="{{ route('courses') }}">
                Courses
            </a>

            <a href="{{ route('trainers') }}">
                Trainers / Coaches
            </a>

            <a href="{{ route('contact') }}">
                Contact
            </a>

            <a href="{{ route('register') }}" class="nav-btn">
                Register
            </a>

        </nav>

    </header>

    <!-- MAIN CONTENT -->

    <main>

        @yield('content')

    </main>

    <!-- FOOTER -->

    <footer>

        <p>
            © 2026 BIJAKSATU SDN BHD. All Rights Reserved.
        </p>

        <p>
            Financial Paraplanning Support Services • K661-004-3:2025
        </p>

    </footer>

</body>

</html>