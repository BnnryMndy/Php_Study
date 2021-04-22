<nav class="navbar navbar-light bg-light p-2">
    <span class="navbar-brand mb-0 h1">BestRanobe.ru</span>
    
    <form class="form-inline " action="index.php" method="POST">
    <?php
    
    if(!isset($_COOKIE['Login']))
    {
        echo '<input class="btn secondary-btn" type="button" value="Войти">';
    }
    else{
        echo '<input class="btn secondary-btn" type="button" value="выйти">';
    }
    
    ?>
        
        <input name="sortby" class=" mr-sm-2" list="sortby" value="<? echo($_POST['sortby'])?>" placeholder="по умолчанию" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Сортировать</button>
        <datalist id="sortby" >
            <option label="📈 Цена по возростанию" value="PriceUp">
            <option label="📉 Цена по убыванию" value="PriceDown">
            <option label="🦔 по умолчанию" value="default">
        </datalist>
    </form>
</nav>