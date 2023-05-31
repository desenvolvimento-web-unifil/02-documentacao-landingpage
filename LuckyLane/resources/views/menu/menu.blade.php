<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <div class="header">
        <h1><a href="{{ route('menu') }}" class="float">
                LuckyLane
            </a></h1>

    </div>
    <div class="main-container">
        <div class="card">
            <img src="{{ Vite::asset('resources/images/roleta.png') }}" alt="roleta" style="width:100%">
            <div class="container">
                <h3>Roleta</h3>
                <button><a href="{{ route('roleta') }}">Jogar</a></button>
            </div>
        </div>
        <div class="card">
            <img src="{{ Vite::asset('resources/images/mines.png') }}" alt="mines" style="width:100%">
            <div class="container">
                <h3>Mines</h3>
                <button><a href="{{ route('mines') }}">Jogar</a></button>
            </div>
        </div>
        <div class="card">
            <img src="{{ Vite::asset('resources/images/coin.png') }}" alt="coin" style="width:100%">
            <div class="container">
                <h3>Coinflip</h3>
                <button><a href="{{ route('coinflip') }}">Jogar</a></button>
            </div>
        </div>
    </div>
</body>

</html>
