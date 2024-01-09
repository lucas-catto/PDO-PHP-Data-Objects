<?php
    // 7. How to delete records?

    require_once "config.php";

    if (isset($_GET['action']) == 'delete') {

        if (isset($_GET['id'])) {
        
            $id = $_GET['id'];

            $sql = $pdo->prepare('DELETE FROM User WHERE Id=:id');
            $sql->bindParam(':id', $id, PDO::PARAM_INT);
            $sql->execute();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>7. How to delete records?</title>

        <style>html{background: rgb(100,100,100);}</style>

    </head>
    <body>

        <h1>How to delete records?</h1>
        
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
                        echo "<th><a href='update.php?id=".$view["Id"]."'>Update</a> <a href='read.php?id=".$view["Id"]."&&action=delete'>Delete</a></th>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
