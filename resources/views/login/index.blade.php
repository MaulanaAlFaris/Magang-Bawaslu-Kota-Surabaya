<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="main-content">
        <div class="container">
            <img src="{{ asset("/images/LogoBawaslu.png") }}" alt="logo">
            <form action="{{ url('login/process') }}" method="post">
                @csrf
                <div class="container-list">
                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <input autofocus type="text" class="form-control" 
                            @error('username')
                                is-invalid
                            @enderror
                            name="username" id="username" value="{{ old('username') }}" placeholder="username">
                        </div>

                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <input type="password" class="form-control" 
                            @error('password')
                                is-invalid
                            @enderror
                            name="password" id="password" placeholder="********">
                        </div>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 row">
                        <label for="submit" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" name="submit">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>