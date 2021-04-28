<nav class="navbar navbar-light bg-light p-2">
    <span class="navbar-brand mb-0 h1">BestRanobe.ru</span>
    <?php
    
    if(!isset($_COOKIE['Login']))
    {
        echo '<input class="btn secondary-btn" type="button" value="Войти">';
    }
    else{
        echo '<input class="btn secondary-btn" type="button" value="выйти">';
    }
    
    ?>

</nav>