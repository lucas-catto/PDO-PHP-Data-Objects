<?php

    // 2. Mysqi Vs PDO

    define("DB_SERVER", "localhost");
    define("DB_NAME",   "");
    define("DB_USER",   "");
    define("DB_PASS",   "");

    // Mysqli
    $mysqli = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    // PDO - Its' more accessible to more databases
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
?>
