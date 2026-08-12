<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição</title>
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
        hr {
            border: none;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
            margin: 1.5rem 0;
        }
        
    </style>
</head>
<body>

    <div class="container">

    <h1>Exemplos de linguagens</h1>
    <hr>
    <?php 
    $linguagens = [
        [
            "id" => 1,
            "nome" => "HTML",
            "descricao" => "Estruturação"
        ],
        [
            "id" => 2,
            "nome" => "CSS",
            "descricao" => "Estilos"
        ],
        [
            "id" => 3,
            "nome" => "JS",
            "descricao" => "Comportamentos"
        ],
        [
            "id" => 4,
            "nome" => "PHP",
            "descricao" => "Back-End"
        ],
        [
            "id" => 5,
            "nome" => "SQL",
            "descricao" => "Manipulação de dados"
        ]
    ];
?>

    <div>
        <table class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th scope="col" class="text-center"style="width: 80px;">ID</th>
                    <th scope="col ">Linguagem</th>
                    <th scope="col">Descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($linguagens as $linguagem): ?>
                <tr>
                    <td class="text-center fw-bold" style="color:#d4af37"><?= $linguagem["id"] ?>
                </td>
                <td class="fw-sembold "><?= $linguagem["nome"] ?></td>
                <td><?= $linguagem["descricao"] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>