<div class="card mt-3" style="max-width: 18rem;">
    <img src="img/<?php echo($row['picture_name'])?>" alt="" class="card-img-top" style="max-width: 18rem; height: fit-content;">
    <h5 class="card-title"><?php echo($row['title'])?></h5>
    <div class="card-body">
        <p class="card-text"><?php echo($row['description'])?></p>
        <p class="card-text"><small class="text-muted"><?php echo($row['price'])?> руб</small></p>
    </div>
</div>