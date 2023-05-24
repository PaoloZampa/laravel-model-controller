<footer class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-6 p-3 d-flex flex-column">
                <img class="img-fluid" width="300px" src="{{ Vite::asset('resources/img/logo.png') }}" alt="">
                <span class="text-white mt-4">© 1997-2023 Netflix, Inc.</span>
            </div>
            <div class="col-3 p-3">
                <ul>
                    <li>
                        <a class="nav-link text-white bg-secondary rounded my-1 text-center"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a class="nav-link text-white bg-secondary rounded my-1 text-center"
                            href="{{ route('movies') }}">Movies</a>
                    </li>
                    <li>
                        <a class="nav-link text-white bg-secondary rounded my-1 text-center"
                            href="{{ route('contacts') }}">Contacts</a>
                    </li>
                    <li>
                        <a class="nav-link text-white bg-secondary rounded my-1 text-center"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a class="nav-link text-white bg-secondary rounded my-1 text-center"
                            href="{{ route('movies') }}">Movies</a>
                    </li>
                </ul>
            </div>
            <div class="col-3 p-3">
                <p class="text-white-50">
                    Welcome to our film streaming website! We offer a wide selection of movies across all genres,
                    providing the perfect destination for movie lovers. Enjoy top-notch streaming quality and indulge in
                    your favorite films from the comfort of your own home. Join us for the ultimate cinematic
                    experience!
                </p>
            </div>
        </div>
    </div>

</footer>
