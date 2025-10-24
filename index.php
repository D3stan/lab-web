<?php
    require_once('bootstrap.php');

    // Prepariamo i parametri per i template
    $templateParams["titolo"] = "Blog TW - Home";
    $templateParams["articolicasuali"] = $dbh->getRandomPosts();

    var_dump($templateParams);

    require_once('template/base.php');
?>