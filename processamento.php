<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <h1>Recebimento e processamento dos dados</h1>
        <hr>
        <?php
        //Capturando os dados de cada campo  
        //var_dump($_GET);
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $idade = $_POST["idade"];
        $mensagem = $_POST ["mensagem"];
        $interresess = $_POST["interresess"] ?? [];
        $informativos =$_POST["informativos"] ?? "nao";
        ?>
        <h2>Dados Recebidos</h2>
        <p>Nome: <?= $nome ?></p>
        <p>Email: <?= $email ?></p>
        <p>idade: <?= $idade ?> anos</p>
        <p>Mensagem: <?= $mensagem ?> </p>
        <?php if (empty($interresess)): ?>
        <p>Interesses: <?= implode(", ", $interresess) ?></p>
        <?php endif; ?>
        <p>informativos: 
            <?= $informativos === 'sim' ? "Sim": "Não" ?></p>
    </div>















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>