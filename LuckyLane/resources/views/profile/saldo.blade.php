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
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .container {
            text-align: center;
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
        <div id="saldo">Saldo: R$ 0</div>
    </div>

    <div class="container">
        <input type="text" id="saldoInput" placeholder="Digite o valor do saldo">
        <button onclick="adicionarSaldo()">Adicionar Saldo</button>
    </div>
    

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
        $saldoElement.style.color = 'white';
        }

        // Chama a função de atualizar saldo para exibir o saldo inicial
        atualizarSaldo();

    </script>
</body>
</html>