<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require "php_blocks/db_auth.php"?>
    <?php

        //* get _POST data
        $login = $_POST['login'];
        $passwrd = $_POST['password'];

        //* try found similar logins
        $result = $mysqli->query("SELECT COUNT(*) FROM `users` WHERE lower(`Login`) = lower('$login')");
        $row = $result->fetch_assoc();
        
        //* if similar logins not found, insert login and password, else display error message
        if(0 == $row['COUNT(*)']){
            $result = $mysqli->query("INSERT INTO `users`(`Login`, `Password`) VALUES ('$login','$passwrd')");
            require "php_blocks/success.php";
        }
        else{
            require "php_blocks/failed.php";
        }
    ?>    
</body>
</html>




 