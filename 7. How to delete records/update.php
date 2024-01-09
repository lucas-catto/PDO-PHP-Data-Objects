<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update</title>
        
        <style>html{background:rgb(100,100,100);}input{display:block;}</style>

    </head>
    <body>
        <?php
            if (isset($_GET['id'])) {

                // echo is_int($_GET['id']) ? "int" : gettype($_GET['id']);

                $user_id = $_GET['id'];
                
                require_once "config.php";
    
                $sql = $pdo->prepare("SELECT * FROM User WHERE Id = ?");
                $sql->execute(array($user_id));
    
                $user = $sql->fetch(PDO::FETCH_OBJ);
            }
            else {
                echo "<script>
                        window.location.href='./read.php';
                    </script>";
            }
        ?>

        <form method="post">
            Name:         <input type="text"   name="name"         value="<?php echo $user->Name;        ?>">
            Phone Number: <input type="tel"    name="phone_number" value="<?php echo $user->PhoneNumber; ?>"> 
            Email:        <input type="email"  name="email"        value="<?php echo $user->Email;       ?>">
            <input type="submit" name="update"       value="Update">
        </form>
        
        <?php
            $name         = isset($_POST["name"])         ? $_POST["name"]         : false;
            $phone_number = isset($_POST["phone_number"]) ? $_POST["phone_number"] : false;
            $email        = isset($_POST["email"])        ? $_POST["email"]        : false;

            if (
                $name         !== false &&
                $phone_number !== false &&
                $email        !== false
            ) {
                $sql = $pdo->prepare("UPDATE User SET Name=?, PhoneNumber=?, Email=? WHERE Id = ?");
                $sql->execute(array(
                    $name,
                    $phone_number,
                    $email,
                    $user_id
                ));

                echo "<script>
                        alert('Update!');
                        window.location.href='./read.php';
                    </script>";
            }
        ?>
    </body>
</html>
