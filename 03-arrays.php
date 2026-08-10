<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Arrays (Vetores e Matrizes)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<h1>Trabalhando com Arrays</h1>
<hr>
<h2>Array numerico/indexados</h2>

<?php 
//Sintaxe 1: usando colchetes
$bandas = ["Savatage", "Iron Maiden","Slayer"];

//Sintaxe 2: Usando a função array()
$cursos = array ("Excel", "JavaScript", "Games 2D");

//Array heterogêneo (Tipos de dados mistos/variados)
$coisas = ["Ozzy", 2112, "<b>Senac</b>", 234.543, true];

//Array como constante
const FRUTAS = ["morango","abacaxi"];
define ("FILIAIS", ["São Paulo", "Rio de Janeiro"]);
?>

    <h3>Acessando dados de arrays indexados/numericos</h3>
    <ul>
        <li>Banda que mais gosto: <?= $bandas [2] ?></li>
        <li>Gostaria de estudar mais sobre o <?= $cursos [0] ?></li>
        <li>Estamos estudando no <?= $coisas[2] ?></li>
        <li>Estamos na unidade na cidade de <?= FILIAIS[0] ?></li>
    </ul>

    <h2>Array Associativo</h2>
    <p>Lista de dados baseada em uma chave Associativa (na pratica, é um nome/identificador que você dá), e um valor para ela (o dado em sim).</p>

    <?php 
    $curso =[
        //chave associativa => valor
        "titulo" => "Gastronomia",
        "carga_horaria" => 800,
        "descrição" => "Aprender a esquentar água pra fazer miojo"

    ];

    const EMPRESA = [
        "nome" => "Biribinha Soluções em TI",
        "ramo" => "Tecnologia",
        "fundacao" => "31/02/2026"
    ];
    ?>

    <h3>Acessando dados de array Associativo</h3>
    <p>Nome do Curso: <b><?= $curso["titulo"] ?></b></p>
    <p>CH: <b><?= $curso["carga_horaria"] ?></b></p>
    <p>Descrição: <b><?= $curso["descrição"] ?></b></p>
    <p>Prestadora de serviços: <i><?= EMPRESA["nome"] ?></i></p>

    <h2>Arrays de Arrays</h2>
    <?php 
    //Matriz de arrays indexados
    $planoDeEstudos = [
        ["JS Avançado", "Node.js", "Next,js"],
        ["PHP Avançado", "Orientações a Objetos"],
        ["Teoria das Cores", "Photoshop", "Canva","UX/UI"]
    ];

    //Matriz de arrays associativos
    $clientes = [
        [
            "nome" => "Gabriel",
            "me_devendo" => 1000
        ],
        [
            "nome" => "Messias",
            "me_devendo" => 500
        ]
    ];
    ?>
    <h3>Acessando dados da matriz de arrays indexados</h3>
    <p>Meu foco agora é no <?= $planoDeEstudos[1] [0] ?></p>

    <p>O <?=  $clientes[0] ["nome"] ?> me deve <?= $clientes [0] ["me_devendo"] ?></p>

    <h2>Funções de análise/debug de estruturas de dados (Arrys, objetos)</h2>
    <?php 
    //echo $bandas; //não funciona,pois echo não consegue exibir arrys
    ?>

    <h3><code>print_r()</code></h3>
    <pre><?php print_r($bandas) ?></pre>

    <h3><code>var_dump()</code></h3>
    <pre><?php var_dump($bandas) ?>
    
    <pre><?php var_dump(EMPRESA) ?></pre>

    <pre><?php var_dump($curso) ?></pre>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>