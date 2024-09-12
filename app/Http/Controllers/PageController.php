<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function movies()
    {

        $movies = Movie::orderBy('title')->get();

        $title = 'Tutti i film';

        return view('movies', compact('movies', 'title'));
    }
}
