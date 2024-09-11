<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Recupera tutti i film dal database
        $movies = Movie::all();

        // Passa i film alla vista 'home'
        return view('home', compact(['movies' => $movies]));
    }
}
