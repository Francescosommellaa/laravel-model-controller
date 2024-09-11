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

        // SELECT * FROM `books`
        // all() restituisce tutti i record della tabella in ordine di ID
        // $books = Book::all();

        // ottengo massimo 10  libri in ordine alfabetico in base al titolo
        // le condizioni si mettono prima e la quesry termina con get()
        $movies = Movie::orderBy('title')->get();

        $title = 'Tutti i film';

        return view('movies', compact('movies', 'title'));
    }
}
