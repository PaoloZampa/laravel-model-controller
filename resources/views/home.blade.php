@extends('layouts.app')

@section('content')
    <div class="my_jumbotron d-flex align-items-center ">
        <div class="container text-center">
            <h1 class="display-3 pt-5 text-danger  text-uppercase">Discover our movies</h1>
            <p class="text-center">
                <a class="btn btn-danger btn-lg" href="{{ route('movies') }}" role="button">Watch Now!</a>
            </p>
        </div>
    </div>
@endsection
