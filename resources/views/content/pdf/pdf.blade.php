<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>
<body>
    <div class="logo">
        <img src="{{ asset('images/LogoBawaslu.png') }}" alt="logo">
    </div>

    <div class="title">
        <h1>FORMULIR MODEL A</h1>
        <h1>LAPORAN HASIL PENGAWASAN PEMILU</h1>
        <h1>011/LHP/KJI-38.20/02/2023</h1>
    </div>

    <div class="main-content-bg">
        @yield('content')
    </div>
</body>
</html>