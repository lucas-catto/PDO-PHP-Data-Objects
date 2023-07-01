<?php

    // 1. PDO – PHP database extension
    /*
        PDO (PHP Data Objects) is a PP extension through which we can access and work with databases. Through PDO is similar in many aspects to mySQLi, it is better to workwith for the following reasons:
            - It's better protected against hackers;
            - It's consistent across databases, so it can work with MySQL as well as other types of databases (SQLite, Oracle, PostgreSQL, etc.);
            - It's object oriented as it's core.
    */

    print_r(PDO::getAvailableDrivers()); // Array ( [0] => mysql [1] => sqlite )

    define("HOST",     "localhost");
    define("DBNAME",   "");
    define("USERNAME", "");
    define("PASSWORD", "");

    try{
        $pdo = new PDO("mysql:host=".HOST.";dbname=".DBNAME,USERNAME,PASSWORD);
    } catch(PDOException $error){
        exit("ERROR: " . $error->getMessage());
    }
?>
