<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresso do Show</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .ingresso {
            width: 320px;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            text-align: center;
            border: 4px solid;
        }

        
        .infantil {
            background-color: #e8f5e9;
            border-color: #4caf50;
            color: #2e7d32;
        }

        
        .adulto {
            background-color: #e3f2fd;
            border-color: #2196f3;
            color: #1565c0;
        }

        
        .melhor-idade {
            background-color: #fff3e0;
            border-color: #ff9800;
            color: #e65100;
        }

        .ingresso h1 {
            margin-top: 0;
            font-size: 1.6rem;
        }

        .ingresso p {
            font-size: 1.15rem;
            margin: 12px 0;
        }

        .valor {
            font-size: 1.8rem;
            font-weight: bold;
            margin-top: 20px;
        }

        .categoria {
            display: inline-block;
            padding: 6px 14px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 0.95rem;
            background-color: rgba(255,255,255,0.7);
        }
    </style>
</head>
<body>

<?php
    
    $idade = 30;

    if ($idade < 12) {
        $categoria = "Infantil";
        $valor = 25.00;
        $classe = "infantil";
    } elseif ($idade < 60) {
        $categoria = "Adulto";
        $valor = 40.00;
        $classe = "adulto";
    } else {
        $categoria = "Melhor Idade";
        $valor = 20.00;
        $classe = "melhor-idade";
    }

    // Formatação do valor (Desafio 2)
    // number_format(valor, casas decimais, separador decimal, separador de milhar)
    $valorFormatado = "R$ " . number_format($valor, 2, ',', '.');
?>

    <!-- Sintaxe alternativa do if (intercalando PHP e HTML) -->
    <div class="ingresso <?= $classe ?>">
        <h1>Ingresso do Show</h1>

        <p><strong>Idade:</strong> <?= $idade ?> anos</p>

        <p>
            <strong>Categoria:</strong><br>
            <span class="categoria"><?= $categoria ?></span>
        </p>

        <p class="valor"><?= $valorFormatado ?></p>
    </div>

</body>
</html>