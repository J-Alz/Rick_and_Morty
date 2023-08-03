
<!DOCTYPE html>
<html>
<head>
    <title>Rick & Morty</title>
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
</head>
<body>
    <header>
        <span>Rick & Morty Personajes</span>
        <form class="form-header" action="{{ route('showSearch') }}" method="GET">
            <input type="text" name="search_term" placeholder="Ingrese el nombre del personaje">
            <button type="submit">Buscar</button>
        </form>
        <a class="cargar" href="/consume-api">
            <img src="{{ asset('/update.svg') }}" alt="" width="40">
            <span><small> Cargar datos</small></span>
        </a>
    </header>
    <main>
        <article class="slider">
            <span>Filtros de búsqueda</span>
            <form class="form-especies">
                <div>
                    <span>Especies</span>
                </div>
                <a class="btn-a" href="/">All</a>
                <a class="btn-a" href="/human">Human</a>
                <a class="btn-a" href="/alien">Alien</a>
                <a class="btn-a" href="/humanoid">Humanoid</a>
                <a class="btn-a" href="/poopybutthole">Poopybutthole</a>
                <a class="btn-a" href="/animal">Animal</a>
                <a class="btn-a" href="/robot">Robot</a>
                <a class="btn-a" href="/cronenberg">Cronenberg</a>
            </form>
        </article>
        <article class="page-board">
            @yield('content') 
            @yield('detail')
        </article>
    </main>
</body>
</html>

