<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira Atividade</title>
    <style>
    h1{color:red}
    </style>
</head>
<body>
    <h1>Exercicio 01</h1>
    <hr>

    <?php

    echo "Estou estudando a linguagem PHP para Back-End";
    $data ="29/07/2026";
    $nome = "Tetra";
    $curso = "nova";
    $carga = 200;
    $falta = $carga *0.25;

    ?> 

    <p>A data de hoje é: <?=$data ?></p>
    <p>Nome: <?= $nome ?></p>
    <ul>
        <li><p>O curso que a(o) <?=$nome?>  é : <?=$curso?></p></li>
        <li><p>carga horaria é : <?= $carga ?> Horas </p></li>
        <li><p>A taxa de falta em cima da carga horaria de 25% de 200 é : <?= $falta ?> Horas</p></li>
    </ul>

    <?php 
    $teste ="qualquercoisa";
    echo $teste;
    ?>
    <p class="">Teste <?= $teste ?>  </p>
    
    

    
    

    
    
</body>
</html>