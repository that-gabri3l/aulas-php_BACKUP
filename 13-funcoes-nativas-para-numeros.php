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
    <h1>Funções nativas: numeros,data e hora</h1>
    <hr>
    <h2>Numeros:</h2>
    <h3>max() e min()</h3>
    <p>Maior valor na lista passada: 
        <?= max(10, -5, 12, 150, 0, 1235.43) ?>
    </p>
    <p>Menor valor na lista passada:
        <?= min(10, -5, 12, 150, 0, 1235.43)  ?>
    </p>
    <?php  
    $listaDeNumeros = [2,10,1000,432,0,-2];
    ?>
    <p>Maior valor existente no array:
        <?= max($listaDeNumeros) ?>
    </p>
    <p>Menor valor existente no array:
        <?= min($listaDeNumeros) ?>
    </p>

    <h3>round(), ceil(), floor(), rand()</h3>
    <!-- round(): varia conforme o valor -->
    <p>Arredondamento: <b><?= round(4.7) ?></b></p>
    <p>Arredondamento: <b><?= round(4.2) ?></b></p>
    <p>Arredondamento: <b><?= round(4.5) ?></b></p>
    <p>Arredondamento para CIMA: <b><?= ceil(4.2) ?></b></p>
    <p>Arredondamento para BAIXO: <b><?= floor(4.9) ?></b></p>

    <h3>number_format()</h3>

    <?php 
    $preco = 10567.86;
    $numeroComMuitasCasasDecimais = 1458.4567123;
    ?>
    <p>Preço Formatado:
        <b>R$ <?= number_format($preco,2, ",", ".") ?></b></p>
        <p>Numero com ajuste de casas decimais:
            <?= number_format($numeroComMuitasCasasDecimais) ?>
        </p>

        <hr>

        <h2>Data e hora</h2>
        <h3>date(), date_default_timezone_set(), strtotime()</h3>
        <?php 
        date_default_timezone_set("America/Sao_Paulo");
        $data = date("d/m/Y");
        $hora = date("H:i:s");
        $dataHora = date("d/m/Y H:i");
        ?>
        <p>Data : <?= $data ?></p>
        <p>Hora : <?= $hora ?></p>
        <p>Data e hora: <?= $dataHora ?></p>
        <?php  
        $dataFormatoBD = "2020-09-11";

        //Usamos o strtotime para converter primeiro a data em um timestamp(data em formato numerico). EM seguida, o date aplica o formato desejado 
        $dataFormtada = date("d/m/Y", strtotime($dataFormatoBD));?>
    <p>Data (Em formato de sistema/banco): <?= $dataFormatoBD ?></p>
    <p>Data (Convertida e formatada): <?= $dataFormtada ?></p>





















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>