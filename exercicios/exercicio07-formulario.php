<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Cadastro de Produtos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> 
<link rel="stylesheet" href="/estilos.css"> 

</head>
<body >

<div class="container mt-5">
<div class="row justify-content-center">
    <div class="col-md-6">

    <div class="card shadow">
        <div class="card-header text-white text-center">
    <h4>Cadastro de Produto</h4>
        </div>
        <div class="card-body p-4">

        <form action="exercicio07-processamento.php" method="POST">

            <div class="mb-3">
            <label for="nome" class="form-label">Nome do Produto</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="mb-3">
            <label for="fabricante" class="form-label">Fabricante</label>
            <select class="form-select" id="fabricante" name="fabricante" required>
                <option value="" selected disabled>Selecione...</option>
                <option value="Apple">Apple</option>
                <option value="Samsung">Samsung</option>
                <option value="Sony">Sony</option>
                <option value="Microsoft">Microsoft</option>
            </select>
            </div>

            <div class="mb-3">
                <label for="preco" class="form-label">Preço (R$)</label>
                <input type="number" class="form-control" id="preco" name="preco" min="100" max="10000" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" min="0" max="1000" step="1" required>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-between">
                <button type="reset" class="btn btn-outline-secondary">Limpar</button>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>

            </form>

        </div>
    </div>

    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>