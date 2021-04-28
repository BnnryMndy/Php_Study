<?
    // unset($_COOKIE['Login']);
    setcookie('Login', null);
    setcookie('role', null);

    header("Location: index.php");
?>