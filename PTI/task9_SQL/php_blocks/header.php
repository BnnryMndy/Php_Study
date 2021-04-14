    <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Navbar</span>
    
    <form class="form-inline">
        <input class="form-control mr-sm-2" list="sortby" placeholder="по умолчанию" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Сортировать</button>
        <datalist id="sortby">
            <option label="📈 Цена по возростанию" value="PriceUp">
            <option label="📉 Цена по убыванию" value="PriceDown">
            <option label="🦔 по умолчанию" value="default">
        </datalist>
    </form>
</nav>