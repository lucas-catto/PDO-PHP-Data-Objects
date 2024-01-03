<?php
    // 6. How to use PDO to update the database?
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>6. How to use PDO to update the database?</title>

        <style>html{background: rgb(100,100,100);}</style>

    </head>
    <body>

        <?php require_once "config.php"; ?>

        <h1>Use PDO to update the database</h1>

        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
            </tr>

            <?php
            
                $sql = $pdo->prepare("SELECT * FROM User");
                $sql->execute();

                $views = $sql->fetchAll(PDO::FETCH_ASSOC);

                foreach ($views as $view) {
                    echo "<tr>";
                        echo "<th>" . $view["Id"]           . "</th>";
                        echo "<th>" . $view["Name"]         . "</th>";
                        echo "<th>" . $view["PhoneNumber"]  . "</th>";
                        echo "<th>" . $view["Email"]        . "</th>";
                        echo "<th><a href='update.php?id=".$view["Id"]."'>Update</a></th>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
