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

        p {
            font-size: 1.15rem;
            color: #f0f0f0;
        }

        a {
            color: var(--gold);
            text-decoration: none;
        }

        .aprovado {
    color: var(--gold);          
    font-weight: bold;
    font-size: 1.3rem;
}

.reprovado {
    color: var(--text);          
    font-weight: bold;
    font-size: 1.3rem;
}

        a:hover {
            color: var(--gold-light);
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

<div class="container ">

<h1>Exercicio 05</h1>

<?php  
$nota1 = 8.7;
$nota2 = 6.5;
$nota3 = 9.9;

function calcularMedia(float $nota1, float $nota2, float $nota3):float {
    $media = ($nota1 + $nota2 + $nota3)/3;  
    return $media;
}

function verificarNotas (float $media):string {
    if ($media >= 7) {
        return "Aprovado";
    } else{
        return "Reprovado";
    }
}

$mediaFinal = calcularMedia($nota1,$nota2,$nota3);
$situacao = verificarNotas($mediaFinal);

$mediaFormatada = number_format($mediaFinal,1, ',', '.')

?>

    <div class="card">
        <h1>Resultado do Aluno: A</h1>

        <p><strong>Nota 1:</strong> <?= $nota1 ?></p>
        <p><strong>Nota 2:</strong> <?= $nota2 ?></p>
        <p><strong>Nota 3:</strong> <?= $nota3 ?></p>

        <hr>

        <p>media <span class="media"> <?= $mediaFormatada ?></span></p>

        <?php
if ($situacao == 'Aprovado') {
    echo '<span class="aprovado">' . $situacao . '</span>';
} else {
    echo '<span class="reprovado">' . $situacao . '</span>';
}
?>
    </div>

















</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>