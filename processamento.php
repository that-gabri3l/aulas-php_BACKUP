<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Processamento dos Dados</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="container">
    <h1>Recebimento e processamento dos dados</h1>
    <hr>

<?php
/* $_POST e $_GET
Arrays superglobais que possuem os dados enviados a partir de formulários e/ou links dinâmicos. */

$erros = [];

// Verificando se houve uma requisição POST
if($_SERVER["REQUEST_METHOD"] === "POST"){


    // Capturando os dados de cada campo
    //E sanitizando/limpando os dados
    $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);

    $interessesValidos = ["html", "css", "javascript"];

    /* Operador ?? -> coalescência nula
    Caso nenhum interesse seja selecionado,
    a variável guardará um array vazio */

    //Filtrando as opções de interesses e tornando obrigatori o uso de array
    $interesses = filter_input(INPUT_POST, 'interesses', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY) ?? [];

    if(!is_array($interesses)){
        //garantindo que ao menos vire um array vazio
        $interesses = [];

        //registrando uma mensagem de erro no array de erros
        $erros [] = "Seleção invalida de interesses";   
    }


    $interessesValidos = array_intersect($interesses, $interessesValidos);
    // Caso nenhuma opção seja selecionada, o valor "nao" fica como padrão

    //Informativos
    //Define uma lista de opções valudas confrome o formulario
    $opcoesValidas = ["sim", "nao"];
    
    //Filtramos a entrada que o usuario escolheu
    $informativos = filter_input(INPUT_POST, 'informativos', FILTER_SANITIZE_SPECIAL_CHARS);

    //Verificamos se a escolha do usuario é uma das validas. Se sim, usamos ela. Senão, usamos "nao'
    $informativos = in_array($informativos, $opcoesValidas) ? $informativos : "nao";

    if(empty ($nome)) $erros[] = "O campo nome é obrigatorio";
    if(empty ($email)) $erros[] = "O e-mail deve ser informado";
    if(empty($mensagem)) $erros[] = "Você deve escrever uma mensagem";

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $erros[] = "O email é valido";


    $filtroIdade = [
        "options" => [
            "min_range" => 0,
            "max_range" => 130,
        ]
    ];
    if(!filter_var($idade, FILTER_VALIDATE_INT, $filtroIdade)) {
        $erros [] = "Idade invalida. A idade deve estar entre 0 e 130";
    }

    if(!empty($erros)):
?>  
    <div class="alert alert-danger">
        <h2>Erros Encontrados:</h2>
        <ul class="mb-3">
            <?php  
            foreach($erros as $erro): ?>
            <li><?= $erro ?></li>
            <?php endforeach ?>
        </ul>
        <a href="17-formularios.html" class="btn btn-warning"></a>
    </div>
    <?php else: ?>
    <h2>Dados recebidos</h2>
    <p>Nome: <?= $nome ?></p>
    <p>E-mail: <?= $email ?></p>
    <p>Idade: <?= $idade ?> anos</p>
    <p>Mensagem: <?= $mensagem ?> </p>

    <?php if(!empty($interessesValidos)): ?>
    <p>Interesses: <?= implode(", ", $interessesValidos) ?></p>
    <?php endif; ?>

    <p>Informativos:
        <?= $informativos === 'sim' ? "Sim" : "Não" ?>
    </p>
<?php
    endif;
} else {
?>
    <!-- Acesso inválido (usuário não veio do formulário) -->
    <div class=" alert alert-danger">
        <h2>Acesso inválido</h2>
        <p>Você deve usar o formulário para enviar os dados.</p>
        <hr>
        <a href="17-formulario.html" class="btn btn-primary">Ir para o formulário.</a>
    </div>
<?php
}
?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>