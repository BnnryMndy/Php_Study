<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Edit</title>
</head>
<body>
    <?php require "php_blocks/db_auth.php"?>
    <?php
        $id = $_GET['id'];
        $result = $mysqli->query("SELECT * FROM books where book_id = '$id'");

        $row = $result->fetch_assoc();
    ?>
    <div class="container">
        <form action="udpate.php" method="post">
            <input hidden name="id" value="<? echo $id?>">
            <input name="book_name"  label="название ранобэ" value="<? echo($row['title']);?>" type="text">
            <textarea class="form-control"   name="book_description" id="" cols="30" rows="10"><? echo($row['description']);?></textarea>
            <!-- <input name=""  label="Описание" value="" type="text"> -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">&#8381;</span>
                </div>
                <input name="book_price" type="number" class="form-control" aria-label="Цена" label="Цена" value="<? echo($row['price']);?>">
            </div>
            
            <input name="book_author"  label="Автор" value="<? echo($row['author']);?>" type="text">

            <input type="submit" value="Обновить">
        </form>
    </div>
</body>
</html>