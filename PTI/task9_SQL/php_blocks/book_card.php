<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
    
<div class="card m-2 p-3" style="max-width: 18rem;">
    <?
    if(strlen($row['picture_name']) > 0){
        echo '<img src="img/'.$row['picture_name'].'" alt="" class="card-img-top" style="max-width: 18rem; height: fit-content;">';
    }
    ?>
    
    <h5 class="card-title"><?php echo($row['title'])?></h5>
    <div class="card-body">
        <p class="card-text"><?php echo($row['description'])?></p>
        <p class="card-text"><small class="text-muted"><?php echo($row['price'])?> руб</small></p>
        <?
            if($_COOKIE['role'] == 'admin' || $_COOKIE['role'] == 'manager'){
                echo '<a href="edit.php?id='.$row["book_id"].'"> <small class="text-muted">edit</small></a>';
            }
        ?>
    </div>
    
</div>