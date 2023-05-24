<header class="bg-dark text-center pt-3">
    <img class="img-fluid" width="300px" src="{{ Vite::asset('resources/img/logo.png') }}" alt="">

    <nav class="nav justify-content-center  ">
        <a class="nav-link text-white active {{ Route::currentRouteName() === 'home' ? 'bg-secondary' : ''}} " href="{{ route('home') }}" aria-current="page">Home</a>
        <a class="nav-link text-white {{ Route::currentRouteName() === 'movies' ? 'bg-secondary' : ''}}" href="{{ route('movies') }}">Movies</a>
        <a class="nav-link text-white {{ Route::currentRouteName() === 'contacts' ? 'bg-secondary' : ''}} " href="{{ route('contacts') }}">Contacts</a>
    </nav>

</header>