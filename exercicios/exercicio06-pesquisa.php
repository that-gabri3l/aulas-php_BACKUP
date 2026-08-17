<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: system-ui, -apple-system, sans-serif;
            line-height: 1.6;
            padding: 40px 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            color: var(--gold);
            text-align: center;
            margin-bottom: 10px;
            font-size: 1.8rem;
        }

        p{ color: var(--gold);}

        

        .card {
            background: var(--bg2);
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 22px 25px;
            margin-bottom: 25px;
        }

        .card h2 {
            color: var(--gold);
            font-size: 1.15rem;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 1px solid var(--border);
        }

        .item {
            margin-bottom: 8px;
            color: var(--text2);
        }

        .item strong {
            color: var(--text);
        }

        .valor {
            color: var(--gold-light);
            font-family: monospace;
        }

        .valida {
            color: #4ade80;
            font-weight: 600;
        }

        .invalida {
            color: #f87171;
            font-weight: 600;
        }

        hr {
            border: none;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
            margin: 30px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Funções de Data e Hora em PHP</h1>

        <?php
        // 1. Timestamp atual
        $timestampAtual = time();
        ?>

        <div class="card">
            <h2>1. time() — Timestamp atual</h2>
            <div class="item">Valor do timestamp: <span class="valor"><?= $timestampAtual ?></span></div>
            <div class="item">Data legível: <span class="valor"><?= date("d/m/Y H:i:s", $timestampAtual) ?></span></div>
            <hr>
            <p>Demonstra o "timestamp" atual, no caso o total do tempo de 1/01/1970 até agora. mais utilizado para registros ou calculo de prazos</p>
        </div>

        <?php
        // 2. Informações detalhadas
        $info = getdate($timestampAtual);
        ?>

        <div class="card">
            <h2>2. getdate() — Informações da data atual</h2>
            <div class="item">Dia do mês: <span class="valor"><?= $info['mday'] ?></span></div>
            <div class="item">Mês: <span class="valor"><?= $info['mon'] ?> (<?= $info['month'] ?>)</span></div>
            <div class="item">Ano: <span class="valor"><?= $info['year'] ?></span></div>
            <div class="item">Hora: <span class="valor"><?= $info['hours'] ?>:<?= $info['minutes'] ?>:<?= $info['seconds'] ?></span></div>
            <div class="item">Dia da semana: <span class="valor"><?= $info['weekday'] ?></span></div>
            <div class="item">Dia do ano: <span class="valor"><?= $info['yday'] ?></span></div>
            <hr>
            <p>Demonstrar Informações precisas sobre aquela determinada data. E podendo demonstrar partes isoladas  </p>
        </div>

        <?php
        // 3. Criando data específica
        $dataNatal = mktime(20, 30, 0, 12, 25, 2026);
        ?>

        <div class="card">
            <h2>3. mktime() — Criando data específica</h2>
            <div class="item">Parâmetros usados: <span class="valor">mktime(20, 30, 0, 12, 25, 2026)</span></div>
            <div class="item">Timestamp gerado: <span class="valor"><?= $dataNatal ?></span></div>
            <div class="item">Data formatada: <span class="valor"><?= date("d/m/Y H:i:s", $dataNatal) ?></span></div>
            <div class="item">Dia da semana: <span class="valor"><?= date("l", $dataNatal) ?></span></div>
            <hr>
            <p> Gera um "timestamp" baseado em parâmetros informados manualmente seguindo a ordem: hora, minuto, segundo, mês, dia e ano.Criar referências numéricas de tempo para datas futuras ou passadas específicas</p>
        </div>

        <div class="card">
            <h2>4. checkdate() — Validação de datas</h2>
            <?php
            $datasParaTestar = [
                [2, 29, 2024],
                [2, 29, 2025],
                [4, 31, 2026],
                [12, 25, 2026],
            ];

            foreach ($datasParaTestar as $data) {
                $mes = $data[0];
                $dia = $data[1];
                $ano = $data[2];
                $resultado = checkdate($mes, $dia, $ano);
                $classe = $resultado ? "valida" : "invalida";
                $texto = $resultado ? "VÁLIDA" : "INVÁLIDA";
                
                echo "<div class='item'>$dia/$mes/$ano → <span class='$classe'>$texto</span></div>";
            }
            ?>
            <hr>
            <p>Usando uma data inserida, valida se essa data realmente exista, considerando anos bissextos (como no exemplo deu invalida o dia 29 de fevereiro de 2025 pois não existe esse dia pois não é um ano bissexto), Seguindo a ordem: Mês, dia e Ano.</p>

        </div>

        <hr>
    </div>

























<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>