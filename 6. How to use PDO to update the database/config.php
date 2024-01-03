<?php

    define("HOST",     "localhost");
    define("DBNAME",   "PDO");
    define("USERNAME", "root");
    define("PASSWORD", "");

    try{
        $pdo = new PDO("mysql:host=".HOST.";dbname=".DBNAME,USERNAME,PASSWORD);
    } catch(PDOException $error){
            exit("ERROR: " . $error->getMessage());
    }
?>
