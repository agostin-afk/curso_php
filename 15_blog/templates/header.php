<?php
include_once("helpers/url.php")

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
    <title>Blog-index

    </title>
</head>
<body>
    <a href="<?= $BASE_URL ?>">
    <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog do Agosto">
    </a>
    <nav>
        <ul>
            <li><a href="<?= $BASE_URL ?>"><p>Home</p></a></li>
            <li><a href="<?= $BASE_URL ?>"><p>Categorias</p></a></li>
            <li><a href="<?= $BASE_URL ?>"><p>Sobre</p></a></li>
            <li><a href="<?= $BASE_URL ?>"><p>Contatos</p></a></li>
        </ul>
    </nav>