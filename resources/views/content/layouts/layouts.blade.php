<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/layouts.css">
    <title>Document</title>
</head>
<header>
    <div class="navbar">
        <nav class="navbar-background">
            <ul class="nav-list">
                <li>
                    <div class="logo-bawaslu">
                        <img src="{{ asset('images/LogoBawaslu.png') }}" alt="logo">
                    </div>
                </li>
                <li>
                    <a href="{{ url('logout') }}">
                        <button class="logout-button" >Log Out</button>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<body>
    <div class="main-body-background">
        <div class="sidebar">
            @yield('content-side')
        </div>
        <div class="main-content">
            @yield('content-main')
        </div>
    </div>
</body>
<footer>
    <div class="footer">
        <div class="footer-background">
            <ul class="footer-list">
                <li>Tentang Kami</li>
                <li>Alamat : Jl. Raya Tenggilis Mejoyo, Kali Rungkut, Kec. Rungkut, Kota Surabaya</li>
                <li>Email : set.surabaya@bawaslu.go.id</li>
                <li>No.Telpon: (031)99857450</li>
            </ul>
        </div>
    </div>
</footer>
</html>