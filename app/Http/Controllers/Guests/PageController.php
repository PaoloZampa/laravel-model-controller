<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function movies()
    {   
        $moviesList = Movie::all();
        return view('movies', compact('moviesList'));
    }

    public function contacts()
    {
        return view('contacts');
    }
}
