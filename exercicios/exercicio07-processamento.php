<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: exercicio07-formulario.php');
    exit;
}

// sanitizacao
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$fabricante = filter_input(INPUT_POST, 'fabricante', FILTER_SANITIZE_SPECIAL_CHARS);
$preco = filter_input(INPUT_POST, 'preco', FILTER_VALIDATE_FLOAT);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);

// validacao
$erros = [];

if (empty($nome)) {
  $erros[] = "O nome do produto é obrigatório.";
}

$fabricantes = ['Apple', 'Samsung', 'Sony', 'Microsoft'];
if (empty($fabricante) || !in_array($fabricante, $fabricantes)) {
  $erros[] = "Selecione um fabricante válido.";
}

if ($preco === false || $preco < 100 || $preco > 10000) {
  $erros[] = "O preço deve estar entre 100 e 10000.";
}

if ($quantidade === false || $quantidade < 0 || $quantidade > 1000) {
  $erros[] = "A quantidade deve estar entre 0 e 1000.";
}

// desafio: calculo do valor total
$total = 0;
if (empty($erros)) {
  $total = $preco * $quantidade;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Resultado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="/estilos.css">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <?php if (!empty($erros)): ?>

      <div class="card border-danger">
        <div class="card-header bg-danger text-white">
          <h5>Erros encontrados</h5>
        </div>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <?php foreach ($erros as $erro): ?>
            <li class="list-group-item text-danger"><?php echo $erro; ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="exercicio07-formulario.php" class="btn btn-outline-danger mt-3">Voltar</a>
        </div>
      </div>

      <?php else: ?>

      <div>
        <div class="card-header bg-success text-white">
          <h5>Produto cadastrado!</h5>
        </div>
        <div class="card-body">
          <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
          <p><strong>Fabricante:</strong> <?php echo htmlspecialchars($fabricante); ?></p>
          <p><strong>Preço:</strong> R$ <?php echo number_format($preco, 2, ',', '.'); ?></p>
          <p><strong>Quantidade:</strong> <?php echo $quantidade; ?></p>
          <hr>
          <p><strong>Valor Total:</strong> R$ <?php echo number_format($total, 2, ',', '.'); ?></p>
          <a href="exercicio07-formulario.php" class="btn btn-outline-success">Novo cadastro</a>
        </div>
      </div>

      <?php endif; ?>

    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>