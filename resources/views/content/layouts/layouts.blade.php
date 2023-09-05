<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/layouts.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <title></title>
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
            @include('komponen.pesan')
            @yield('content-main')
        </div>
    </div>
</body>
<footer>
    <div class="footer">
        <div class="footer-background">
            <ul class="footer-list">
                <a href="{{ url('portofolio') }}">
                    Copyright © 2023 Bawaslu Kota Surabaya.
                </a>
            </ul>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    document.getElementById("yesBtn").addEventListener("click", function() {
        document.getElementById("hiddenContent").style.display = "block";
    });

    document.getElementById("noBtn").addEventListener("click", function() {
        document.getElementById("hiddenContent").style.display = "none";
    });
</script>

<!-- Script Bootstrap dan jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    document.getElementById("yesBtn").addEventListener("click", function() {
        document.getElementById("additionalContent").style.display = "block";
    });

    document.getElementById("noBtn").addEventListener("click", function() {
        document.getElementById("additionalContent").style.display = "none";
    });
</script>
</html>