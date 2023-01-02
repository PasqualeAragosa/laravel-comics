<header>
    <nav class="navbar p-0">
        <div class="container">
            <div class="logo">
                <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">
            </div>
            <!-- /.logo -->
            <ul class="text-uppercase">
                <li>
                    <a href="/characters" class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}}">characters</a>
                </li>
                <li>
                    <a href="/" class="{{Route::currentRouteName() === 'comics' ? 'active' : ''}}">comics</a>
                </li>
                <li>
                    <a href="/movies" class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}">movies</a>
                </li>
                <li>
                    <a href="/tv" class="{{Route::currentRouteName() === 'tv' ? 'active' : ''}}">tv</a>
                </li>
                <li>
                    <a href="/games" class="{{Route::currentRouteName() === 'games' ? 'active' : ''}}">games</a>
                </li>
                <li>
                    <a href="/collectibles" class="{{Route::currentRouteName() === 'collectibles' ? 'active' : ''}}">collectibles</a>
                </li>
                <li>
                    <a href="/videos" class="{{Route::currentRouteName() === 'videos' ? 'active' : ''}}">videos</a>
                </li>
                <li>
                    <a href="/fans" class="{{Route::currentRouteName() === 'fans' ? 'active' : ''}}">fans</a>

                </li>
                <li>
                    <a href="/news" class="{{Route::currentRouteName() === 'news' ? 'active' : ''}}">news</a>
                </li>
            </ul>
            <!-- /.main-menu -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>