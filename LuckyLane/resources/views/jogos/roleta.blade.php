<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Roleta</title>
</head>
<body>
    <div class="header">
        <h1><a href="{{ route('menu') }}" class="float">
                LuckyLane
            </a></h1>
    </div>
    <h1>Jogo de Roleta de Apostas</h1>
  
  <div class="roulette">
    <div class="roulette-inner">
      <span class="roulette-number">0</span>
    </div>
  </div>
  
  <div class="bet-options">
    <div class="bet-option">Aposta 1</div>
    <div class="bet-option">Aposta 2</div>
    <div class="bet-option">Aposta 3</div>
  </div>
  
  <button class="spin-button">Girar</button>
</html>