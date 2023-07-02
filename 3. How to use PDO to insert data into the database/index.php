
<?php
    require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>3. How to use PDO to insert data into the database?</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <header>
            <a href="view.php">See the registered elements.</a>
        </header>
        <div class="container">

            <form action="" method="post">
                <!-- --------------------------------------------------------------------- -->
                <h1>Insert data into the database using PDO: </h1>
                <!-- --------------------------------------------------------------------- -->
                <div class="inputs">
                    <!-- --------------------------------------------------------------------- -->
                    <label for="name">Name: </label>
                    <input type="text"   name="name"        id="name"        class="inp" required> </br></br>
                    <!-- --------------------------------------------------------------------- -->
                    <label for="phoneNumber">Phone Number: </label>
                    <input type="text"   name="phoneNumber" id="phoneNumber" class="inp" required> </br></br>
                    <!-- --------------------------------------------------------------------- -->
                    <label for="email">Email: </label>
                    <input type="email"  name="email"       id="email"       class="inp" required> </br></br>
                    <!-- --------------------------------------------------------------------- -->
                    <input type="submit" name="action" value="Send!">
                    <!-- --------------------------------------------------------------------- -->
                </div>
            </form>
            <?php

                if(isset($_POST["action"])){

                    $name        = isset($_POST["name"])        ? $_POST["name"]        : "";
                    $phoneNumber = isset($_POST["phoneNumber"]) ? $_POST["phoneNumber"] : "";
                    $email       = isset($_POST["email"])       ? $_POST["email"]       : "";

                    $sql = $pdo->prepare("INSERT INTO Register VALUES (null,?,?,?)");
                    $sql->execute(array($name,$phoneNumber,$email));
                }
            ?>
        </div>
    </body>
</html>
