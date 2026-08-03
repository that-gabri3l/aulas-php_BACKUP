<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
    <style>
        body {
    background-color: #F0F4FF;   
    color: #2C3E6B; 
    margin: 0;  
    padding: 20px;  
    font-family: cursive;   
    }

    h1 {
            text-align: center;
            color: #333;
        }
    a {
    color: #5B6EE1;
    text-decoration: none;              
    }

    .destaque {
            font-weight: bold;
            color: #2c3e50;
        }

    .pessoa {
            background-color: white;
            border-radius: 12px;
            padding: 25px;
            width: 300px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            border-top: 6px solid;
        }
        .pessoa p {
            margin: 10px 0;
            color: #555;
            font-size: 1.05rem;
        }

        .pessoa1 {
            border-top-color: #3498db;
        }

        .pessoa2{
            border-top-color: tomato;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap; }
        
    </style>
</head>
</head>
<body>

<h1>Estruturas de dados com Arrays e Objetos</h1>

<?php
    
    $pessoa1 = [
        "usuario" => "ana_silva",
        "email"   => "ana.silva@email.com",
        "senha"   => "senha123",
        "idade"   => 22,
        "sexo"    => "Feminino",
        "cidade"  => "São Paulo"
    ];

    
    $pessoa2 = new stdClass;
    $pessoa2->usuario = "carlos_souza";
    $pessoa2->email   = "carlos.souza@email.com";
    $pessoa2->senha   = "abc987";
    $pessoa2->idade   = 28;
    $pessoa2->sexo    = "Masculino";
    $pessoa2->cidade  = "Rio de Janeiro";
?>
<div class="container">
        <article class="pessoa pessoa1">
            <h2>Usuário 1 (Array)</h2>
            <p><span class="destaque">Usuário:</span> <?= $pessoa1["usuario"] ?></p>
            <p><span class="destaque">E-mail:</span> <?= $pessoa1["email"] ?></p>
            <p><span class="destaque">Idade:</span> <?= $pessoa1["idade"] ?> anos</p>
        </article>

        <article class="pessoa pessoa2 ">
            <h2>Usuário 2 (Objeto)</h2>
            <p><span class="destaque">Usuário:</span> <?= $pessoa2->usuario ?></p>
            <p><span class="destaque">E-mail:</span> <?= $pessoa2->email ?></p>
            <p><span class="destaque">Idade:</span> <?= $pessoa2->idade ?> anos</p>
        </article>

    </div>






    
</body>
</html>