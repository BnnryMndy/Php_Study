<?php
    $login = $_COOKIE['Login'];
    $message = trim ($_POST['message']);

    if(strlen($message) > 0){
        $result = $mysqli->query("INSERT INTO messages (Login, message_text, sended_time) VALUES ('$login','$message',NOW())");  
    }
    unset($_POST);
    $message = "";
    if($_GET['message']=='sended')
    {

    }
    else{
        header("Location: http://localhost/Php_Study-1/SRW/news.php?message=sended");
        exit();
    }
    
    
?>