<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лента</title>
</head>

<body>
    <?php require "php_blocks/db_auth.php"?>

    <?php
        $result = $mysqli->query('')
    ?>
    <?php while( $row = $result->fetch_assoc()):?>
        <?php require "php_blocks/message.php"?>
    <?php endwhile; ?>
</body>

</html>