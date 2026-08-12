<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        :root {
            --bg: #0a0a0a;
            --bg2: #141414;
            --gold: #d4af37;
            --gold-light: #f0d78c;
            --text: #f0f0f0;
            --text2: #aaa;
            --border: #2a2a2a;
        }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: system-ui, sans-serif;
            line-height: 1.6;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: var(--gold);
        }

        a {
            color: var(--gold);
            text-decoration: none;
        }

        a:hover {
            color: var(--gold-light);
        }

        input,
        textarea,
        select {
            background: var(--bg2);
            border: 1px solid var(--border);
            color: var(--text);
            padding: 0.6rem 0.9rem;
            border-radius: 8px;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: var(--gold);
        }

        .card,
        .box {
            background: var(--bg2);
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 1.25rem;
        }

        hr {
            border: none;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
            margin: 1.5rem 0;
        }

        ::selection {
            background: var(--gold);
            color: #111;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Trabalhando com funções</h1>
        <hr>

        <h2>Função como procedimento (ou sub-rotina)</h2>
        <p>procedimento</p>

        <?php
        function exibirDadosDoAutor()
        {
            echo "<h4>Fulando de Tal</h4>";
            echo "<p>Aplicação <b>Back-End</b> como exemplo</p>";
        } ?>
        <h3>Chamar/Invocar a Função/Procedimento</h3>
        <?php exibirDadosDoAutor() ?>
        <div><?php exibirDadosDoAutor() ?></div>

        <hr>

        <h2>Função com parâmetros (ou argumentos)</h2>
        <?php 
        function somar( $valor1 , $valor2) {
            $total = $valor1 + $valor2;
            return $total;
        }?>
        <h3>Chamada/retorno da função somar</h3>
        <p>Resultado  1 : <?= somar(10,20) ?></p>
        <p>Resultado  2 : <?= somar(142,523) ?></p>
        <p>Resultado  3 : <?= somar(2,10.5) ?></p>

        <?php
        //Variavel de escopo GLOBAL 
        $precoProdutoA = 250;
        $precoProdutoB = 300;
        
        //Podemos passar valores de outras variaveis para os parâmetros de uma função
        $resultadoProdutos = somar ($precoProdutoA, $precoProdutoB);
        ?>
        <p>Resultado 4: <?= $resultadoProdutos ?></p>

        <!-- Utilizando Função como parte da condição de um if -->
        <?php if(somar (100, 500) > 1200): ?>
            <p class="text-sucess">Meta Atingida!</p>
        <?php else: ?>
            <p class="text-danger">Não foi dessa vez!</p>
        <?php endif; ?>

        <hr>

        <h2>Função com parâmetros opcionais</h2>
        <?php  
        // Neste caso, deixamos o parâmetro pessoa com um valor padrão (no exemplo, uma string vazia)
        function exibirMensagem ($mensagem, $pessoa = ""){
        return "Ola $mensagem $pessoa";
        }?>

        <p>Saudação 1: <?= exibirMensagem("Boa tarde", "Samuel") ?></p>
        <p>Saudação 2: <?= exibirMensagem("Boa dia") ?></p>

        <hr>

        <h2>Função com indução de tipos de dados</h2>
        <p>Nesta abordagem, definimos tipos de dados para parâmetros e para o retorno da função.</p>
        <?php  
        function verificarNegativo (int $valor):string{
            if($valor <0) return "é negativo";
        return "não é negativo";
        }
        ?>
        <p>numero 10: <?= verificarNegativo(10) ?></p>
        <p>numero -10: <?= verificarNegativo(-10) ?></p>

        <hr>
        <h2>Função anônima (ou lambda)</h2>

        <?php  // SEMPRE DECLARAR Primeiro a função antes de chamar
        $multiplicar = function(float $valor1, float $valor2):float{
            return $valor1 * $valor2;

        };
        ?>
        <!-- Repare no uso do $junto com o nome da função -->
        <p>exemplo: <?= $multiplicar(10,2) ?></p>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>