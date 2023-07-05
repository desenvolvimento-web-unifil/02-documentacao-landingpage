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
            <div id="saldo">Saldo: R$ 0</div>
    </div>
    <main>
        <div class="fog"></div>
        <article>
            <div class="wrapper-roulette">
                <ul>
                    <li class="roulette-one"><span><b>-100 R$</b></span></li>
                    <li class="roulette-two"><span><b>+200 R$</b></span></li>
                    <li class="roulette-three"><span><b>+50 R$</b></span></li>
                    <li class="roulette-four"><span><b>-300 R$</b></span></li>
                    <li class="roulette-five"><span><b>-50 R$</b></span></li>
                    <li class="roulette-six"><span><b>+500 R$</b></span></li>
                    <li class="roulette-seven"><span><b>-200 R$</b></span></li>
                    <li class="roulette-eight"><span><b>+400R$</b></span></li>
                    <li class="roulette-nine"><span><b>PLAYSTATION</b></span></li>
                    <li class="roulette-ten"><span><b>-150 R$</b></span></li>

                </ul>
            </div>
            <button class="start">Iniciar</button>
        </article>
    </main>
    <script>
        // Função para obter o saldo atual do usuário
        function getSaldo() {
        // Faça uma requisição ao servidor para obter o saldo do usuário
        // Aqui você pode substituir esta chamada com a lógica adequada para obter o saldo do usuário
        const saldo = 9000; // Exemplo de saldo fixo

        return saldo;
        }

        // Função para atualizar o saldo exibido no elemento
        function atualizarSaldo() {
        const $saldoElement = document.getElementById('saldo'); // Elemento onde o saldo será exibido

        // Obtém o saldo atual
        const saldo = getSaldo();

        // Atualiza o valor exibido no elemento HTML
        $saldoElement.textContent = `Saldo: R$ ${saldo.toFixed(2)}`;
        $saldoElement.style.color = 'white';
        }

        // Chama a função de atualizar saldo para exibir o saldo inicial
        atualizarSaldo();

        const $iniciar = document.querySelector('.start');
        const $content = document.querySelectorAll('.wrapper-roulette ul li');

        let n = 0; 
        let stop;
        let random;

        function varRoulete() {
        stop = 0;
        random = Math.floor((Math.random() * 50) + 10);
        };

        $iniciar.addEventListener('click', event => { 
        event.preventDefault(); 
        varRoulete();
        clearInterval(startRoulette);
        startRoulette = setInterval(roulette, 100);
        });  

        var startRoulette;

        function roulette() { 
            if(n < 10 && stop != random){
                [].map.call($content, function(v, index, array) {
                    v.classList.remove("active");
                    array[n].classList.add("active"); 
                    document.querySelector("body").classList.remove("active");
                    v.classList.remove("select");
                }) 
                n++;
                stop++; 
            } else {
                n = 0;
                finish();
            }
        };  

        function finish() {
            if(stop == random) {
                const $select = document.querySelector('.wrapper-roulette ul .active');
                setTimeout(function(){
                    $select.classList.add("select");
                    document.querySelector("body").classList.add("active");
                }, 500)
            }
        }
        
    </script>
</body>
</html>