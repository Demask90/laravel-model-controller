<header>
    <div id="logo">
        {{-- <img src="{{ asset('')}}" alt=""> --}}
    </div>

    <nav>
        <ul>
            <li><a class="{{Request::route()->getName() =='pagina-home' ? 'active' : NULL}}" href="{{ route('pagina-home')}}">Home</a></li>
            <li><a class="{{Request::route()->getName() =='pagina-movies' ? 'active' : NULL}}" href="{{ route('pagina-movies')}}">Movies</a></li>
        </ul>
    </nav>
</header>