<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <input type="text" name="message">
        <input type="submit" value="send">
    </form>
    <?php
        echo "Ваш текст ".$_GET['message'];
    ?>
</body>
</html>