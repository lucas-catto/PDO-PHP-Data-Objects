<?php
    // 5. How read data from particular row ?
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>5. How read data from particular row?</title>

        <style>html{background: rgb(100,100,100);}</style>

    </head>
    <body>

        <?php require_once "config.php"; ?>

        <h1>Read data from database with PDO</h1>

        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
            </tr>

            <?php

                $id = 3;

                $id1 = 5;
                $id2 = 8;

                // $sql = $pdo->prepare("SELECT * FROM User WHERE Id = $id");
                $sql = $pdo->prepare("SELECT * FROM User WHERE Id BETWEEN $id1 AND $id2");
                $sql->execute();

                $views = $sql->fetchAll(PDO::FETCH_ASSOC);

                foreach ($views as $view) {
                    echo "<tr>";
                        echo "<th>" . $view["Id"]           . "</th>";
                        echo "<th>" . $view["Name"]         . "</th>";
                        echo "<th>" . $view["PhoneNumber"]  . "</th>";
                        echo "<th>" . $view["Email"]        . "</th>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
