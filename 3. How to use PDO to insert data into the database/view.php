<html>
    <link rel="stylesheet" href="view.css">
</html>

<html>
    <header>
        <a href="index.php">Go Back!</a>
    </header>
</html>
<div class="container">
    <?php

        require_once "config.php";

        $sql = $pdo->prepare("SELECT * FROM Register");
        $sql->execute();

        $exibition = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach ($exibition as $view) {
            echo "<div class='text'>";
                echo "<p>Id: "          . $view["Id"]          . "</p>";
                echo "<p>Name: "        . $view["Name"]        . "</p>";
                echo "<p>Email: "       . $view["Email"]       . "</p>";
                echo "<p>PhoneNumber: " . $view["PhoneNumber"] . "</p>";
            echo "</div>";
        }
    ?>
</div>
