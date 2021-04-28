<?php require "php_blocks/db_auth.php"?>
<?php
    $login = $_POST['login'];
    $passwrd = $_POST['password'];

    $result = $mysqli->query("SELECT COUNT(*) FROM `users` WHERE lower(`Login`) = lower('$login') and `Password` = '$passwrd' ");
    $row = $result->fetch_assoc();
    if(1 == $row['COUNT(*)']){
        setcookie('Login', $login, mktime(). time()+60*60*24*30);
        $result = $mysqli->query("SELECT role FROM `users` WHERE lower(`Login`) = lower('$login')");
        $row = $result->fetch_assoc();
        setcookie('role', $row['role'], mktime(). time()+60*60*24*30);
        header("Location: index.php");
        echo "success";
    }
    else{
        if(!isset($_COOKIE['Login'])){
            header("Location: login.php");
            echo "error";
        }
    }
