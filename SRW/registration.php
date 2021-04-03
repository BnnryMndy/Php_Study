<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reg.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Регистрация</title>
</head>

<body class="text-center">
    <main class="form-signin"> 
        <form action="news.php" method="post">
            <h1 class="h3 mb-3 mt-3 fw-normal">Регистрация</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Логин">
                <label for="floatingInput">Логин</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Пароль">
                <label for="floatingPassword">Пароль</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingSecPassword" placeholder="Повторите пароль">
                <label for="floatingPassword">Повторите пароль</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Зарегистрироваться</button>

            <a href="login.php" class="mt-5 mb-3 already">Уже маслёнок</a>
        </form>
    </main>
</body>

</html>