<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/edit.css">
    <title>Edit</title>
</head>
<body>
    <?php require "php_blocks/db_auth.php"?>
    <?php
        $id = $_GET['id'];
        $result = $mysqli->query("SELECT * FROM books where book_id = '$id'");

        $row = $result->fetch_assoc();
    ?>
    <div class="page-wrapper bg-blue p-t-100 p-b-100">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading" style="background: url(img/<?php echo($row['picture_name'])?>) center center/cover no-repeat;
                    padding-top: 210px;"></div>
                <div class="card-body">
                    <h2 class="title">Редактирование <? echo($row['title']);?></h2>
                    <form action="udpate.php" method="post">
                        <input hidden name="id" value="<? echo $id?>">
                        <div class="input-group">
                            <input name="book_name" class="input--style-1"  label="название ранобэ" value="<? echo($row['title']);?>" type="text">
                        </div>
                        <div class="input-group">
                            <textarea class="form-control"   name="book_description" id="" cols="30" rows="10"><? echo($row['description']);?></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">&#8381;</span>
                            </div>
                            <input name="book_price" type="number" class="form-control" aria-label="Цена" label="Цена" value="<? echo($row['price']);?>">
                        </div>
                        <div class="p-t-20"></div>
                        <div class="input-group">
                            <input class="input--style-1" name="book_author"  label="Автор" value="<? echo($row['author']);?>" type="text">
                        </div>
                        

                        
                        

                        <div class="p-t-20"></div>
                        <input class="btn btn--radius btn--green" type="submit" value="Обновить">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>







