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
    <div id="saldo">Saldo</div>
    <main>
        <div class="fog"></div>
        <article>
            <div class="wrapper-roulette">
                <ul>
                    <li class="roulette-one"><span><b>-R$100</b></span></li>
                    <li class="roulette-two"><span><b>+R$200</b></span></li>
                    <li class="roulette-three"><span><b>+R$50</b></span></li>
                    <li class="roulette-four"><span><b>-R$300</b></span></li>
                    <li class="roulette-five"><span><b>-R$50</b></span></li>
                    <li class="roulette-six"><span><b>+R$500</b></span></li>
                    <li class="roulette-seven"><span><b>-R$200</b></span></li>
                    <li class="roulette-eight"><span><b>+R$400</b></span></li>
                    <li class="roulette-nine"><span><b>-R$600</b></span></li>
                    <li class="roulette-ten"><span><b>-R$150</b></span></li>

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
        const saldo = 0; // Exemplo de saldo fixo

        return saldo;
        }

        // Função para atualizar o saldo exibido no elemento
        function atualizarSaldo() {
        const $saldoElement = document.getElementById('saldo'); // Elemento onde o saldo será exibido

        // Obtém o saldo atual
        const saldo = getSaldo();

        // Atualiza o valor exibido no elemento HTML
        $saldoElement.textContent = `Saldo: R$ ${saldo.toFixed(2)}`;
        $saldoElement.style.color = 'black';
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