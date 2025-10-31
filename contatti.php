<?php
    require_once('bootstrap.php');

    // Prepariamo i parametri per il template base
    $templateParams["titolo"] = "Blog TW - Contatti";
    $templateParams["nome"] = "contatti-table.php";
    $templateParams["articolicasuali"] = $dbh->getRandomPosts();
    $templateParams["categorie"] = $dbh->getCategories();

    // Parametri specifici
    $templateParams["autori"] = $dbh->getAuthors();

    //var_dump($templateParams["autori"]);
    /*
    array(2) { 
        [0]=> array(3) {
            ["username"]=> string(21) "cippalippa@blogtw.com"
            ["nome"]=> string(11) "Cippa Lippa"
            ["argomenti"]=> string(10) "Apache,PHP"
        }
        [1]=> array(3) {
            ["username"]=> string(19) "ginopino@blogtw.com"
            ["nome"]=> string(9) "Gino Pino"
            ["argomenti"]=> string(26) "CSS,HTML,Javascript,jQuery"
        }
    }
        */

    require_once('template/base.php');
?>