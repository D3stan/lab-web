<?php
    require_once('bootstrap.php');

    // Prepariamo i parametri per il template base
    $templateParams["titolo"] = "Blog TW - Login";
    $templateParams["nome"] = "login-form.php";
    $templateParams["articolicasuali"] = $dbh->getRandomPosts();
    $templateParams["categorie"] = $dbh->getCategories();

    // var_dump($templateParams);

    require_once('template/base.php');
?>