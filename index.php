<?php
    require_once('bootstrap.php');

    // Prepariamo i parametri per il template base
    $templateParams["titolo"] = "Blog TW - Home";
    $templateParams["nome"] = "lista-articoli.php";
    $templateParams["articolicasuali"] = $dbh->getRandomPosts();
    $templateParams["categorie"] = $dbh->getCategories();

    // Parametri speciali
    $templateParams["articoli"] = $dbh->getPosts(2);

    // var_dump($templateParams);

    require_once('template/base.php');
?>