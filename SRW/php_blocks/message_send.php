<?php
    $login = $_COOKIE['Login'];
    $message = trim ($_POST['message']);

    if(strlen($message) > 0){
        $result = $mysqli->query("INSERT INTO messages (Login, message_text, sended_time) VALUES ('$login','$message',NOW())");  
    }
    unset($_POST);
    unset($message);
?>