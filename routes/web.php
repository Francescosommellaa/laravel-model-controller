<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'index']);

Route::get('/', function () {

    return view('home');
})->name('home');

Route::get('/chi-siamo', function () {
    return view('about');
})->name('about');

Route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');
