<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média do Aluno</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .card {
            background: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            margin-top: 0;
            color: #333;
        }

        p {
            font-size: 1.15rem;
            margin: 12px 0;
            color: #555;
        }

        .aprovado {
            color: #28a745;
            font-weight: bold;
            font-size: 1.3rem;
        }

        .reprovado {
            color: #dc3545;
            font-weight: bold;
            font-size: 1.3rem;
        }

        .media {
            font-size: 1.4rem;
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>

<?php
    // 1. Três variáveis com as notas do aluno
    $nota1 = 8.5;
    $nota2 = 7.0;
    $nota3 = 6.5;

    // 2. Função para calcular a média
    function calcularMedia($n1, $n2, $n3) {
        $media = ($n1 + $n2 + $n3) / 3;
        return $media;
    }

    // 3. Função para verificar a situação do aluno
    function verificarSituacao($media) {
        if ($media >= 7) {
            return "Aprovado";
        } else {
            return "Reprovado";
        }
    }

    // 4. Chamando as funções
    $mediaFinal = calcularMedia($nota1, $nota2, $nota3);
    $situacao = verificarSituacao($mediaFinal);

    // Formatando a média com 1 casa decimal
    $mediaFormatada = number_format($mediaFinal, 1, ',', '.');
?>

    <div class="card">
        <h1>Resultado do Aluno</h1>

        <p><strong>Nota 1:</strong> <?= $nota1 ?></p>
        <p><strong>Nota 2:</strong> <?= $nota2 ?></p>
        <p><strong>Nota 3:</strong> <?= $nota3 ?></p>

        <hr>

        <p>Média: <span class="media"><?= $mediaFormatada ?></span></p>

        <p>
            Situação: 
            <span class="<?= $situacao === 'Aprovado' ? 'aprovado' : 'reprovado' ?>">
                <?= $situacao ?>
            </span>
        </p>
    </div>

</body>
</html> 