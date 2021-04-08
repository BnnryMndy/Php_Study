<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>SQL task</title>
</head>
<body>
    <?php require "php_blocks/db_auth.php"?>
    <div class="container">
        <div class="card-columns">
        <?php
            $result = $mysqli->query("SELECT * FROM books");
        ?>
        <?php while( $row = $result->fetch_assoc()):?>
            <?php require "php_blocks/book_card.php"?>
        <?php endwhile; ?>
        </div>
    </div>
</body>
</html>