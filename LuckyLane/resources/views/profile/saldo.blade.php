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
        // Função para obter o saldo atual do usuário
        function getSaldo() {
            // Faça uma requisição ao servidor para obter o saldo do usuário
            // Aqui você pode substituir esta chamada com a lógica adequada para obter o saldo do usuário
            const saldo = parseFloat(document.getElementById('saldoInput').value) || 0;

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
    </script>
</body>
</html>