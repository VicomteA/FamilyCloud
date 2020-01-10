<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" type="text/css" href="css/app.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

</head>

<body class="pagePresentation">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1>Family Cloud</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Partagez en toute simplicité</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <p>Que ce soit en famille ou entre amis, partagez ces moments qui vous ont fait vibrer.</p>
            </div>
        </div>
        <div class="row authentification">
            @if (Route::has('login'))
            @auth
            <a href="{{ url('/home') }}">Accueil</a>
            @else
            <div class="col-4">
                <a class="bouton-auth" href="{{ route('login') }}">Connexion</a><br>
            </div>
            @if (Route::has('register'))
            <div class="col-4 offset-4">
                <a class="bouton-auth" href="{{ route('register') }}">Inscription</a>
                @endif
                @endauth
            </div>
        </div>
        @endif
    </div>
    </div>
</body>

</html>
