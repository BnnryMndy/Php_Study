<form class="form-inline " action="index.php" method="POST">
        <input name="sortby" class=" mr-sm-2" list="sortby" value="<? echo($_POST['sortby'])?>" placeholder="по умолчанию" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Сортировать</button>
        <datalist id="sortby" >
            <option label="📈 Цена по возростанию" value="PriceUp">
            <option label="📉 Цена по убыванию" value="PriceDown">
            <option label="🦔 по умолчанию" value="default">
        </datalist>
</form>