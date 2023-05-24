@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-uppercase text-center my-3 ">Movies</h1>
        <div class="row row-cols-md-4">
            @forelse ($moviesList as $movie)
                <div class="col my-2">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ $movie->image }}" alt="Title">
                        <div class="card-body">
                            <h4 class="card-title">{{ $movie->title }}</h4>
                            <p class="card-text">{{ $movie->original_title }}</p>
                            <p>
                                Vote:
                                <strong>{{ $movie->vote }}</strong>
                            </p>
                            <p class="card-text">
                                <strong>Production date: </strong>
                                {{ $movie->date }}
                            </p>
                        </div>
                        <div class="card-footer">
                            <span>
                                <strong>
                                    Nationality:
                                </strong>
                                {{ $movie->nationality }}
                            </span>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <p>Sorry no movies</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
