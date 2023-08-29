<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/pdf.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>PDF</title>
</head>
<body>
    <div class="logo">
        <img src="{{ asset('images/LogoBawaslu.png') }}" alt="logo">
    </div>

    <div class="title">
        <li>
            <h1 class="title-h1">FORMULIR MODEL A</h1>
            <h1 class="title-h1">LAPORAN HASIL PENGAWASAN PEMILU</h1>
            <h1 class="title-h1">011/LHP/KJI-38.20/02/2023</h1>
        </li>
    </div>

    <div class="main-content-bg">
        @yield('content')
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>