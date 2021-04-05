<?php
    $login = $_COOKIE['login'];
    $message = $_POST['message'];

    if(!empty($message)){
        $result = $mysqli->query("INSERT INTO `messages`(`Login`, `message_text`, `sended_time`) VALUES ('$login','$message',CURDATE())");  
    }


?>