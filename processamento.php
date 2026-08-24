<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Processamento dos Dados</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="container">
    <h1>Recebimento e processamento dos dados</h1>
    <hr>

<?php
/* $_POST e $_GET
Arrays superglobais que possuem os dados enviados a partir de formulários e/ou links dinâmicos. */

// Verificando se houve uma requisição POST
if($_SERVER["REQUEST_METHOD"] === "POST"){


    // Capturando os dados de cada campo
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $mensagem = $_POST["mensagem"];

    /* Operador ?? -> coalescência nula
    Caso nenhum interesse seja selecionado,
    a variável guardará um array vazio */
    $interesses = $_POST["interesses"] ?? [];

    // Caso nenhuma opção seja selecionada, o valor "nao" fica como padrão
    $informativos = $_POST["informativos"] ?? "nao";
?>  
    <h2>Dados recebidos</h2>
    <p>Nome: <?= $nome ?></p>
    <p>E-mail: <?= $email ?></p>
    <p>Idade: <?= $idade ?> anos</p>
    <p>Mensagem: <?= $mensagem ?> </p>

    <?php if(!empty($interesses)): ?>
    <p>Interesses: <?= implode(", ", $interesses) ?></p>
    <?php endif; ?>

    <p>Informativos:
        <?= $informativos === 'sim' ? "Sim" : "Não" ?>
    </p>
<?php
} else {
?>
    <!-- Acesso inválido (usuário não veio do formulário) -->
    <div class=" alert alert-danger">
        <h2>Acesso inválido</h2>
        <p>Você deve usar o formulário para enviar os dados.</p>
        <hr>
        <a href="17-formulario.html" class="btn btn-primary">Ir para o formulário.</a>
    </div>
<?php
}
?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>