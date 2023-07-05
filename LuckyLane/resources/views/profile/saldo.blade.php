<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
    <style>
        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        
        input[type="text"] {
            padding: 10px;
            margin-bottom: 10px;
        }
        
        button {
            padding: 10px 20px;
            background-color: #be3144;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>
            <a href="{{ route('menu') }}" class="float">
                LuckyLane
            </a>
        </h1>
        
    </div>
    <div id="saldo">Saldo: R$ 0</div>
    <div>
        <input type="number" id="saldoInput" placeholder="Digite o valor do saldo">
        <button onclick="adicionarSaldo()">Adicionar Saldo</button>
    </div>
    
    <script>
        const saldo = parseInt(localStorage.getItem('saldo')) || 0;

        function setCookie(cname, cvalue, exdays) {
            const d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            const expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }

        function getCookie(cname) {
            const name = cname + "=";
            const decodedCookie = decodeURIComponent(document.cookie);
            const ca = decodedCookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i].trim(); // Remove os espaços em branco no início e no final da string
                if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
                }
            }
        return "";
        }

        function adicionarSaldo() {
            const quantidade = parseInt(document.getElementById('saldoInput').value);
            let saldoAtual = parseInt(localStorage.getItem('saldo')) || 0;

            if (!isNaN(quantidade) && quantidade > 0) {
                saldoAtual += quantidade;
                localStorage.setItem('saldo', saldoAtual);
                document.getElementById('saldo').innerText = 'Saldo: R$ ' + saldoAtual;
                atualizarSaldo();
            }
        }

        // Carrega o saldo armazenado no localStorage ao carregar a página
        window.onload = function() {
            const saldo = parseInt(localStorage.getItem('saldo')) || 0;
            document.getElementById('saldo').innerText = 'Saldo: R$ ' + saldo;
        };
    </script>
</body>
</html>