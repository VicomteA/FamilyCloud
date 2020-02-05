<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FamilyCloud</title>

    <link rel="stylesheet" type="text/css" href="css/app.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 banniere">
                <h1>FamilyCloud</h1>
            </div>
        </div><br>
        <div class="row">
            @if (Route::has('login'))
            <div class="col-6 offset-3 authentification">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a><br>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </div>
</body>

</html>
