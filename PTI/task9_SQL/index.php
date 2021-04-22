<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/books_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>SQL task</title>
</head>
<body>
    <?
        //TODO:
        // * сделать добавление книг
        // * сделать удаление книг
        // * сделать систему ролей (админ может добавлять/удалять/редактировать, манагер только редактировать)
        
    ?>
    <?php require "php_blocks/db_auth.php"?>
    <div class="container">
        <?php require "php_blocks/header.php"?>
        <div class="card-group">
        <?php
            $sortDictionary = [
                    'PriceUp' => 'price asc',
                    'PriceDown' => 'price DESC',
                    'default' => 'book_id ASC'

            ];

            $sort = $sortDictionary[$_POST['sortby']];
            if(strlen($_POST['sortby']) <= 1){
                $sort = $sortDictionary['default'];
            }
            $result = $mysqli->query("SELECT * FROM books ORDER BY $sort");
        ?>
        <?php while( $row = $result->fetch_assoc()):?>
            <?php require "php_blocks/book_card.php"?>
        <?php endwhile; ?>
        </div>
    </div>
</body>
</html>