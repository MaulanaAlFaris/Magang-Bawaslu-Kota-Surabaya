<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/dashboard.css">
    
    <title>Dashboard Bawaslu</title>
</head>
<header>
    <div class="navbar">
        <nav class="navbar-background">
            <ul class="nav-list">
                <li>
                    <div class="logo">
                        <img src="{{ asset('images/LogoBawaslu.png') }}" alt="logo">
                    </div>
                </li>
                <li>
                    <button class="login-button"><a href="{{ url('login')}}">Login</a></button>
                </li>
            </ul>
        </nav>
    </div>
</header>
<body>
    <div class="main-body">
        <div class="body-background">
            <img src="{{ asset('images/BodyPhoto.png') }}" alt="poto">
            <h1>Selamat Datang di Bawaslu Admin Center</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos aliquid laboriosam rerum facere, excepturi, ratione placeat asperiores numquam a impedit consectetur ut fugit, veritatis aspernatur voluptas? Molestiae, accusamus magnam. Non.</p>
        </div>
    </div>
</body>
<footer>
    <div class="footer">
        <div class="footer-background">
            <ul class="footer-list">
                <li>Tentang Kami</li>
                <li>Alamat: Jl. Raya Tenggilis Mejoyo, Kali Rungkut, Kec. Rungkut, Kota Surabaya</li>
                <li>Email: set.surabaya@bawaslu.go.id</li>
                <li>No.Telpon: (031)99857450</li>
            </ul>
        </div>
    </div>
</footer>
</html>