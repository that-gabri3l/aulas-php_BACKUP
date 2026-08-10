<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Condicionais</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <style>
        .comprar { color: red; }
        .normal { color: blue; }
    </style>
</head>
<body>
    <h1>(Refatorada) Trabalhando com estruturas condicionais</h1>
    <hr>

    <h2>Condicional SIMPLES: <code>if</code></h2>
<?php 
    $numero = 50;
    if($numero > 10){
?>
        <p> <?=$numero?> é maior que 10.</p>
<?php
    }
?>

    <hr>

    <h2>Condicional COMPOSTA: <code>if/else</code></h2>
<?php  
$produto = "Ultrabook";
$qtdEmEstoque = 0; // o que temos a disposição
$qtdCritica = 5; // mínimo necessário no estoque
?>
    <h3><?= $produto ?></h3>
    <p><b>Quantidade em estoque: </b><?= $qtdEmEstoque ?></p>
<?php  
    if ($qtdEmEstoque < $qtdCritica) :
?>
        <p class="comprar">É necessário comprar/repor</p>

<?php
        if($qtdEmEstoque === 0) :
?>
            <p><mark class="comprar">🚨URGENTE!</mark></p>
<?php
        endif;
    else:
?>
        <p class="normal">Estoque normal.</p>
<?php  
    endif;
?>

<hr>

    <h2>Condicional ENCADEADA: <code>if, elseif, else</code></h2>
<?php  
$idade = 15;
$situacao = ""; // opcional (nem é obrigatório declarar previamente)

if($idade <= 12){
    $situacao = "criança";
} elseif ($idade <= 17) {
    $situacao = "adolescente";
} elseif ($idade <= 59){
    $situacao = "adulto";
} else {
    $situacao = "idoso";
}
?>
    <p>O usuário tem <?= $idade?> anos e é <?= $situacao ?>.</p>

    <h3>Usando os comandos <code>switch/case/default/break</code></h3>
<?php 
$opcao = 1;

switch ($opcao) {
    case 1: $texto = "Legal, o que quer saber?"; break;
    case 2: $texto = "Que pena, o que houve?"; break;
    case 3: $texto = "Que bacana, pode falar!"; break;
    default: $texto = "Não entendi... vou chamar alguém"; break;
}
?> 
<p><?= $texto ?></p>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    
</body>
</html>