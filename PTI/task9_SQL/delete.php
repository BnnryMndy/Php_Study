<?php require "php_blocks/db_auth.php"?>

<?
    if($_COOKIE['role'] == 'admin'){
        $id = $_GET['id'];
        $result = $mysqli->query("DELETE FROM `books` WHERE `book_id` = '$id'");
        header("Location: index.php");
    }
    else{
        echo "у вас недостаточно полномочий для таких суръёзных действий";
    }
