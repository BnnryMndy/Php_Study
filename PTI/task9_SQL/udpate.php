<?
    require "php_blocks/db_auth.php";
    $id = $_POST["id"];
    $name = $_POST["book_name"];
    $description = $_POST["book_description"];
    $author = $_POST["book_author"];
    $price = $_POST["book_price"];

    echo $id.'<br>'.$description.'<br>'.$name.'<br>'.$description.'<br>'.$author.'<br>'.$price;

    $result = $mysqli->query("UPDATE `books` SET `title`='$name' ,`author`='$author' ,`description`= '$description' ,`price`= $price WHERE `book_id` = $id");
    // header("Location: index.php");