<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">DC COMICS</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link
                        {{ str_starts_with(Route::currentRouteName(), 'admin.home') ? 'active' : '' }}"
                            aria-current="page" href="{{ route('admin.comics.home') }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ str_starts_with(Route::currentRouteName(), 'admin.products') ? 'active' : '' }}"
                            href="{{ route('admin.comics.index') }}">
                            Products
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
