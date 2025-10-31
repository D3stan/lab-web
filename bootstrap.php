<?php
    require_once('db/database.php');
    $dbh = new DatabaseHelper("localhost", "root", "", "blogtw", 3306);
    define("UPLOAD_DIR", "./upload/");
    function getIdFromName($name){
        return preg_replace("/[^a-z]/", '', strtolower($name));
    }
?>