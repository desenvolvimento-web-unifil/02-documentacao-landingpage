<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Início</title>
</head>

<body>
    <div class="header">
        <div class="header-content">
            <h1>
                <a href="{{ route('menu') }}" class="float">
                    LuckyLane
                </a>
            </h1>
        </div>
        <a href="{{ route('register') }}">
            <button class="perfil">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="44"
                    height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
            </button>
        </a>
        <a href="{{ route('saldo') }}">
            <button>Saldo</button>
        </a>
        
    </div>
    <div class="main-container">
        <div class="card">
            <img src="{{ Vite::asset('resources/images/roleta.png') }}" alt="roleta" style="width:100%">
            <div class="container">
                <h3>Roleta</h3>
                <a href="{{ route('roleta') }}"><button>Jogar</button></a>
            </div>
        </div>
    </div>
</body>

</html>
