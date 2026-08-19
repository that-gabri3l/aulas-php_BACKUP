<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros</title>
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
        <h1>Filtros para validação e sanitização</h1>
        <hr>
        <p>Filtros são recursos de análise e Limpeza de dados aplicados através de funções especiais, normalmente as funções <code>filter_var</code> e <code>filter_input</code> e tambem o com o suo de <b>constantes</b> de validação/sanitização</p>

        <h2>validação</h2>
        <h3>FILTER_VALIDADE_EMAIL</h3>

        <?php  
        $email = "email@provedor.com";
        $emailValido = filter_var($email, FILTER_VALIDATE_EMAIL);
        ?>

        <pre><?php var_dump($emailValido) ?></pre>

        <?php if ($emailValido): ?>
            <p class="text-success">E-mail correto!</p>
            <?php else: ?>
                <p class="text-danger">E-mail incorreto!</p>
        <?php endif ?>




















    </div>
    















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>