<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лента</title>
</head>

<body>
    <?php require "php_blocks/db_auth.php"?>

    <?php
        $login = $_POST['login'];
        $passwrd = $_POST['password'];
 
        $result = $mysqli->query("SELECT COUNT(*) FROM `users` WHERE lower(`Login`) = lower('$login') and `Password` = '$passwrd' ");
        $row = $result->fetch_assoc();
        if(1 == $row['COUNT(*)']){
            setcookie('Login', $login);
        }
        else{
            header("Location: http://localhost/Php_Study-1/SRW/login.php");
        }
    ?>

    <?php require "php_blocks/message_form.php"?>
    <?php require "php_blocks/message_send.php"?>

    <?php
        $result = $mysqli->query('')
    ?>
    <?php while( $row = $result->fetch_assoc()):?>
        <?php require "php_blocks/message.php"?>
    <?php endwhile; ?>
</body>

</html>