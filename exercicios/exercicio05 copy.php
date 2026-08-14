<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média dos Alunos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">

    <h1 class="text-center mb-4">Resultado dos Alunos</h1>

<?php
    $alunos = [
        [
            "nome"  => "Ana Silva",
            "nota1" => 8.5,
            "nota2" => 7.0,
            "nota3" => 9.0
        ],
        [
            "nome"  => "Bruno Costa",
            "nota1" => 5.5,
            "nota2" => 6.0,
            "nota3" => 4.5
        ],
        [
            "nome"  => "Carla Mendes",
            "nota1" => 7.0,
            "nota2" => 8.0,
            "nota3" => 7.5
        ],
        [
            "nome"  => "Diego Santos",
            "nota1" => 4.0,
            "nota2" => 5.5,
            "nota3" => 6.0
        ],
        [
            "nome"  => "Eduarda Lima",
            "nota1" => 9.0,
            "nota2" => 8.5,
            "nota3" => 9.5
        ]
    ];

    function calcularMedia($n1, $n2, $n3) {
        return ($n1 + $n2 + $n3) / 3;
    }

    function verificarSituacao($media) {
        if ($media >= 7) {
            return "Aprovado";
        } else {
            return "Reprovado";
        }
    }
?>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>Aluno</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Nota 3</th>
                    <th>Média</th>
                    <th>Situação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alunos as $aluno): ?>
                    <?php
                        $media = calcularMedia($aluno["nota1"], $aluno["nota2"], $aluno["nota3"]);
                        $situacao = verificarSituacao($media);
                        $mediaFormatada = number_format($media, 1, ',', '.');

                        $classeSituacao = ($situacao === "Aprovado") ? "text-success fw-bold" : "text-danger fw-bold";
                    ?>
                    <tr>
                        <td class="text-start fw-semibold"><?= $aluno["nome"] ?></td>
                        <td><?= $aluno["nota1"] ?></td>
                        <td><?= $aluno["nota2"] ?></td>
                        <td><?= $aluno["nota3"] ?></td>
                        <td class="fw-bold"><?= $mediaFormatada ?></td>
                        <td class="<?= $classeSituacao ?>">
                            <?= $situacao ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>