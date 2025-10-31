<?php
    require_once('bootstrap.php');

    // Prepariamo i parametri per il template base
    $templateParams["titolo"] = "Blog TW - Archivio";
    $templateParams["nome"] = "archivio-list.php";
    $templateParams["articolicasuali"] = $dbh->getRandomPosts();
    $templateParams["categorie"] = $dbh->getCategories();

    // var_dump($templateParams);

    require_once('template/base.php');
?>