<?php 
//Definindo um caminho de base/referência para os links
const BASE = "/site/";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site usando PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASE ?>css/estilos.css">
</head>
<body>
    <header class="text-center">
        <h1>Site com php</h1>
        <nav>
            <a href="<?= BASE ?>index.php">Inicial</a>
            <a href="<?= BASE ?>cursos.php">Cursos</a>
            <a href="<?= BASE ?>duvidas.php">Duvidas</a>
            <a href="<?= BASE ?>planos.php">Planos</a>
            <a href="<?= BASE ?>consultoria.php">Consultoria</a>
        </nav>
    </header>

    <main class="container">