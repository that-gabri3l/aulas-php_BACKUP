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
    <h1>Trabalhando com estruturas condicionais</h1>
    <hr>

<!-- Lembrete: ao usar condicionais, muitas vezes
 também usaremos operadores relacionais:
<, <=, >, >=, ==, !=, ===, !== -->

    <h2>Condicional SIMPLES: <code>if</code></h2>
<?php 
    $numero = 50;

    // Estrutura tradicional (comando, parênteses, chaves)
    if($numero > 10){
        echo "<p>$numero é maior que 10.</p>";
    }

    // Estrutura abreviada (sem chaves)
    if($numero > 10) echo "<p>$numero é maior que 10.</p>";

    // Estrutura alternativa (sem chaves, com : e endif)
    if($numero > 10):
        echo "<p>$numero é maior que 10.</p>";
    endif;
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
    if ($qtdEmEstoque < $qtdCritica) {
        echo "<p class=\"comprar\">É necessário comprar/repor</p>";

        // Condicional ANINHADA (ela está dentro de outro if)
        if($qtdEmEstoque === 0) {
            echo "<p><mark class=\"comprar\">🚨URGENTE!</mark></p>";
        }
    } else {
        echo "<p class=\"normal\">Estoque normal.</p>";
    }

    //if/else versão abreviada (shorthand if) ?:
    $excessoDeEstoque = $qtdEmEstoque > 100 ? "sim" : "não";
    echo $excessoDeEstoque;

    echo "<br>";
    
    echo $qtdEmEstoque > 100 ? "sim" : "não";
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
/* Protótipo de chatbot
Opções: 1 (informações), 2 (reclamação), 3 (elogio), X (inválida) */
$opcao = 1; // entrada simulada

switch ($opcao) {
    case 1: echo "<p>Legal, o que quer saber?</p>"; break;
    case 2: echo "<p>Que pena, o que houve?</p>"; break;
    case 3: echo "<p>Que bacana, pode falar!</p>"; break;
    default: echo "<p>Não entendi... vou chamar alguém</p>"; break;
}
?> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    
</body>
</html>