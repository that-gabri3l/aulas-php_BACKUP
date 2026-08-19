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
        <h1>Funções Nativas para Arrays</h1>
        <hr>
        <h2>Implode</h2>
        <p>Transforma array em uma string</p>
    <?php  
    $arrayBandas = ["Pink Floyd", "Genesis", "Yes"];
    $textBandas = implode(" - ", $arrayBandas);
    ?>
        <pre><?php var_dump($arrayBandas) ?></pre>
        <pre><?php var_dump($textBandas) ?></pre>

        <hr>

        <h2>extract()</h2>
        <p>Extrai chaves assosciativas para variaveis</p>
    <?php  
    $nome = "Beltran";
    $aluno = ["id" => 1, "nome" => "Fulano", "idade" => 25];
    extract($aluno, EXTR_PREFIX_ALL, "chave");
    //Usamos o segundo parãmetro para definir em um prefixo para os nomes
    //Isso evita conflito/ sobrescrita de outra variaveis
    ?>
        <ul>
            <li>ID: <?= $id ?></li>
            <li>Nome: <?= $nome ?></li>
            <li>Idade: <?= $idade ?></li>
        </ul>
        <p>Variavel <code>$nome</code> Orginal: <?= $nome ?></p>

        <hr>
        <h2>array_sum</h2>
        <p>Somando os valores de um array</p>
        <?php  
        $carrinhoDeCompras = [
            "TV_Led" => 1200,
            "Ultrabook" => 2500,
            "Geladeira" => 3000];
    $total = array_sum($carrinhoDeCompras);
        ?>
        <p>Total: <?= $total ?></p>

        <hr>
        <h2>array_unique()</h2>
        <p>Gera um novo array removendo elementos duplicados/repetidos em um array.</p>
    <?php  
$categorias = ["Eletronicos", "livros", "roupas", "livros", "games", "Eletronicos"];

$categoriasUnicas = array_unique($categorias);
?>
<pre><?php var_dump($categorias) ?></pre>
<pre><?php var_dump($categoriasUnicas) ?></pre>
<hr>

    <h2>array_merge()</h2>
    <p>Junta dados de arrays diferentes.</p>

    <?php  
    $produtosFilialNorte = ["Mouse", "Teclado"];
    $produtosFilialSul = ["Monitor", "Webcam", "Pendrive"];
    
    //$produtos = array_merge ($produtosFilialNorte, $produtosFilialSul);
    //Podemos combinar funções de array (abaixo, merge e depois unique)
    $produtos = array_merge($produtosFilialNorte, $produtosFilialSul);
    ?>

        <pre><?php var_dump($produtos) ?></pre>

    <hr>
    <h2>array_combine()</h2>
    <p>Cria um novo array a partir de uma list ade calores e uma lista de chaves.</p>
<?php  
//Lista de chaves
$games = ["Super_Mario", "Sonic", "Final_Fantasy"];

//Lista de valores
$precos = [99, 50, 129];

$catalago = array_combine($games, $precos);
?>
    <pre><?php var_dump($catalago) ?></pre>

    <hr>

    <h2>array_map()</h2>
    <p>Percorre cada elemento de um array, executa uma funlção (chamada de callback) e gera um novo array com os resultados.</p>
    <?php  
    $catalogoComDesconto = array_map(function ($preco) {
    return $preco - $preco * 0.10;
    }, $catalago);
    ?>
        <pre><?php var_dump($catalogoComDesconto) ?></pre>

        <hr>

        <h2>array_column()</h2>
        <p>Retorna um novo array com os valores de uma determinada chave assosciativa</p>
        <?php  
        $servicos = [
    ["codigo" => 3, "tipo" => "Limpeza", "status" => "Concluído"],
    ["codigo" => 12, "tipo" => "Manutenção", "status" => "Concluído"],
    ["codigo" => 1, "tipo" => "Reparo", "status" => "Pendente"],
    ["codigo" => 7, "tipo" => "Consultoria", "status" => "Concluído"],
    ["codigo" => 4, "tipo" => "Instalação", "status" => "Concluído"]
];

$tiposServicos = array_column($servicos, "tipo");
?>
    <pre><?php var_dump($tiposServicos) ?></pre>

    <hr>

    <h2>array_filter()</h2>
    <p>Retorna valores para um novo array baseadi em alguma condição/criterio</p>
    <?php  
    $servicosConcluidos = array_filter(
        $servicos, fn( array $servico): bool => $servico["status"] === "Concluído"
    );
    ?>

    <pre><?php var_dump($servicosConcluidos) ?></pre>







</div>
















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>