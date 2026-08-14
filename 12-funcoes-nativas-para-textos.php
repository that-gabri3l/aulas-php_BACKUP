<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas para texto</title>
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
    </style>
</head>

<body>
    <div class="container">
        <h1>Funções nativas para textos</h1>
        <hr>
        <!-- mb -> multbyte: permite trabalhar com acentos, caracteres especiais,cedinha -->
        <h2>mb_strlen()</h2>
        <?php
        $texto = "Uma frase qualquer, com aentos e cedinha : ação, clarão, ciência, não.";
        ?>
        <p>String do exemplo: <?= $texto ?></p>
        <p>Tamanho da string: <?= mb_strlen($texto) ?></p>

        <h2>mb_strtoupper()</h2>
        <p>Conversão para maiusculas: <?= mb_strtoupper($texto) ?></p>

        <h2>mb_strtolower()</h2>
        <p>Conversão para minusculas: <?= mb_strtolower($texto) ?></p>

        <h2>str_replace() ou str_ireplace</h2>
        <?php  
        $frase = "Esta é uma frase com palavras feias, como burro, idiota, chato demais e outras palavras ruins (bobo, panaca etc)! Chato mesmo! BOBO pra caramba. Também é um BOBÃO.";

        //Procurando por UMA palavra e substituindo por outra 
        //Usando o ireplace, ele altera as palavras maiusculas tambem ao contrario do replace
        $fraseComSubstituicaoDePalavra = str_ireplace("bobo","cara legal", $frase);

        //Procurando por uma LISTA de palavras e substituindo por outra coisa
        $fraseCensurada = str_ireplace(["panaca","burro","idiota","chato","bobão","bobo","BOBÃO"],"🤫🤬",
        $frase);
        ?>
            <p><mark>Frase original: <?= $frase ?></mark></p>
            <p>Frase com substituição de palavra: <?= $fraseComSubstituicaoDePalavra ?></p>
            <p>Frase Censurada: <?= $fraseCensurada ?></p>


        























    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>