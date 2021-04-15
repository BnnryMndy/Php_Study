<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Лента</title>
</head>

<body>
    <?php require "php_blocks/db_auth.php"?>
    <?php require "php_blocks/message_form.php"?>
    <?php
        $login = $_POST['login'];
        $passwrd = $_POST['password'];
 
        $result = $mysqli->query("SELECT COUNT(*) FROM `users` WHERE lower(`Login`) = lower('$login') and `Password` = '$passwrd' ");
        $row = $result->fetch_assoc();
        if(1 == $row['COUNT(*)']){
            setcookie('Login', $login, mktime(). time()+60*60*24*30);
        }
        else{
            if(!isset($_COOKIE['Login'])){
                header("Location: http://localhost/Php_Study-1/SRW/login.php");
            }
        }
    ?>

    <div class="container">
        
        <?php require "php_blocks/message_send.php"?>

        <?php
            $result = $mysqli->query("SELECT * FROM `messages` ORDER BY `message_id` DESC")
        ?>
        <?php while( $row = $result->fetch_assoc()):?>
            <?php require "php_blocks/message.php"?>
        <?php endwhile; ?>        
    </div>
</body>

</html>
