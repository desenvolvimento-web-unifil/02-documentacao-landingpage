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
        <div class="roleta">
            Roleta
            <button><a href="{{ route('roleta') }}">Jogar</a></button>
        </div>
        <div class="mines">
            Mines
            <button><a href="{{ route('mines') }}">Jogar</a></button>
        </div>
        <div class="coin">
            Coinflip
            <button><a href="{{ route('coinflip') }}">Jogar</a></button>
        </div>
    </div>
</body>
</html>