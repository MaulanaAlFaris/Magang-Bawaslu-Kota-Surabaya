<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Admin Bawaslu</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar-list">
            <div class="menu-bar">
                <li><img src="{{ asset('images/LogoBawaslu.png') }}" alt="logo"></li>
                <li><img src="{{ asset('images/LogoAdmin.png') }}" alt="admin" class="logo-admin"></li>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <ul class="sidebar-list">
            <li><button>User</button></li>
        </ul>
    </div>
    <div class="main-content-background">
        <div class="main-content">
            <main class="container">
                @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>