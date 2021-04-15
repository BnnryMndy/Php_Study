<?
    unset($_COOKIE['Login']);
    setcookie('Login', null);
    
    header("Location: http://localhost/Php_Study-1/SRW/login.php");
?>