<nav class="navbar navbar-light bg-light p-2">
    <span class="navbar-brand mb-0 h1">BestRanobe.ru</span>
    <?php
    
    if(!isset($_COOKIE['Login'])){
        echo '<input onclick="window.location.href=`login.php`" class="btn secondary-btn" type="button" value="Войти">';
        
        
    }
    else{
        if($_COOKIE['role'] == 'admin'){
            echo '<input onclick="window.location.href=`addbook.php`" class="btn secondary-btn" type="button" value="Добавить">';
        }
        echo '<input onclick="window.location.href=`logout.php`" class="btn secondary-btn" type="button" value="выйти">';
        
    }
    
    ?>

</nav>