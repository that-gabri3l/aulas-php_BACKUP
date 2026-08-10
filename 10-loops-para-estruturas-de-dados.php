<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Loop para estruturas </title>
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
    </style>
</head>

<body>

    <div class="container">
        <h1>Loops para estruturas de dados</h1>
        <hr>
        <?php
        $meses = ["Janeorp", "Fevereiro", "Março", "Abril", "Maio", "Junho"];
        ?>

        <h2>Usando o loop for para acessar o array</h2>
        <ol>
            <?php for ($i = 0; $i < count($meses); $i++) { ?>
                <li><?= $meses[$i] ?></li>
            <?php } ?>
        </ol>

        <hr>

        <h2>Usando o loop for para acessar uma matriz (Array de arrays)</h2>
    <?php 
    $planoDeEstudos = [
        ["JS Avançado", "Node.js", "Next.js"],
        ["PHP", "Orientação a Objetos"],
        ["Teoria das Cores", "Photoshop com IA", "UX/UI"]
    ];

    $linhas = count($planoDeEstudos);

    for($i =0; $i < $linhas; $i++)://acessa cada linha
        $colunas = count($planoDeEstudos[$i]);
        for($j =0; $j <$colunas; $j++)://acessa cada coluna
    ?>
        <p> <?= $planoDeEstudos[$i] [$j] ?></p>
    <?php 
        endfor; //fim do acesso a cada coluna
    endfor; //fim do acesso a cada linha
    ?>

        <hr>

        <h2>Usando o Loop foreach para arrays</h2>
        <?php 
        $alunos = ["Thiago", "Adela", "Renan", "Perola"];
        foreach($alunos as $aluno):
        ?>

        <p><?= $aluno ?></p>

        <?php 
        endforeach
        ?>

        <hr>

        <h2>Usando foreach para array associativo</h2>

        <?php 
        $curso = [
            "Titulo" => "Gastronomia",
            "carga_horaria" => 200,
            "descriacao"=> "Aprender o basico sobre a área"
        ];

        foreach($curso as $chave => $valor):
        ?>
        <p><b><?= $chave ?></b>: <?= $valor ?></p>

        <?php 
        endforeach;

        //Extraindo somente o valor
        foreach($curso as $valor):
        ?>
            <p><i><?= $valor ?></i></p>
        <?php 
        endforeach;
        ?>

        <hr>
        <h2>Usando foreach em uma matriz</h2>
    <?php 
    foreach($planoDeEstudos as $categoria)://cada linha (categoria)
        foreach ($categoria as $assunto)://cada coluna (assunto/curso)
    ?>

    <p><?= $assunto ?></p>
    <?php
    endforeach;
endforeach;
    ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>