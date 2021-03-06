<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Я уже смешарик</title>
</head>

<body class="text-center">
    <?
        if(isset($_COOKIE['Login'])){
            header("Location: http://localhost/Php_Study-1/SRW/news.php");
        }
    ?>
    <main class="form-signin"> 
        <form action="news.php" method="post">

            <h1 class="h3 mb-3 mt-3 fw-normal">Я уже маслёнок</h1>
            <div class="form-floating">
                <input name="login" type="text" class="form-control" id="floatingInput" placeholder="Логин">
                <label for="floatingInput">Логин</label>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Пароль">
                <label for="floatingPassword">Пароль</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>

            <a href="registration.php" class="mt-5 mb-3 already">Регистрация</a>
        </form>
    </main>
</body>

</html>
