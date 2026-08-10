<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops no PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>

<div class="container">

    <h1>Trabalhando com comandos de repetição</h1>
    <hr>
    
    <h2>while (enquanto)</h2>
    <p>Executa ações repetidas vezes <b>enquanto</b> a condição for <b>verdadeira</b>.</p>
    
    <?php  
$i = 1;
while($i <= 5): // ou {   
    ?>    
    <p>Parágrafo: <?= $i ?></p>
    <?php  
    $i++;
endwhile; // ou }
?>

<hr>

<h2>do/while (faça/enquanto)</h2>
<p>Executa ações pelo menos <b>uma vez</b> e, se a condição for verdadeira, continua executando outras vezes.</p>
<?php  
$j = 1;
do {
    ?>
    <div>
        <h3>Título qualquer...</h3>
        <p>Bloco <?= $j ?></p>
    </div>
    <?php  
    $j++;
    } while ($j <= 3)
    ?>

<hr>

<h2>for (para)</h2>
<p>Executa ações de acordo com uma <b>quantidade
    determinada de vezes</b>. </p>
    
    <section>
        <h3>FAQ (Perguntas Frequentes)</h3>
        <?php for($i = 1; $i <= 5; $i++){ // ou : ?>
            <details>
                <summary>Pergunta <?= $i ?></summary>
                <p>Resposta <?= $i ?></p>
            </details>
            <?php } // ou endfor; ?>        
        </section>
    </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
    </html>