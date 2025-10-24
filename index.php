<?php
    require_once('bootstrap.php');

    // Prepariamo i parametri per i template
    $templateParams["titolo"] = "Blog TW - Home";
    $templateParams["nome"] = "lista-articoli.php";
    $templateParams["articolicasuali"] = $dbh->getRandomPosts();
    $templateParams["categorie"] = $dbh->getCategories();

    // var_dump($templateParams);

    require_once('template/base.php');
?>