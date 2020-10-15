<nav class="navbar">
    <a href="{{ url('/') }}" class="navbar__brand"></a>

    <ul class="navbar__items">
        <li class="navbar__item">
            <a href="{{ url('/') }}" class="navbar__link">Home</a>
        </li>
        <li class="navbar__item">
            <a href="{{ url('/catalog') }}" class="navbar__link">Katalog</a>
        </li>
        <li class="navbar__item">
            <a href="{{ url('/blog') }}" class="navbar__link">Blog</a>
        </li>
        <li class="navbar__item">
            <p class="navbar__theme">🌕</p>
        </li>
    </ul>

    <div class="toggle-menu">
        <input type="checkbox" class="toggle-menu__trigger">
        <span class="toggle-menu__block"></span>
        <span class="toggle-menu__block"></span>
        <span class="toggle-menu__block"></span>
    </div>
</nav>
