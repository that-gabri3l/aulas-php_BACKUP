<?php include "recursos.php";?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de recursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <h1>Inclusão ou Modularização de Recursos</h1>
        <hr>
        <p>Utilizamos os comandos <code>include</code> e/ou <code>require</code> para importar arquivos com recursos externos de qualquer natureza, permitindo assim a reutilização de codigo</p>

        <h2>Exemplos de uso/acesso</h2>
        <p>Estamos estudando no <?= ESCOLA ?> fazendo curso <?= $curso ?>.</p>
        <p>Para fazer este curso o aluno deve ser maior de idade</p>
        <p>Como você <?= ALUNO ?> tem 20 anos, você é <?= verificarIdade(20) ?></p>


    </div>

















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>