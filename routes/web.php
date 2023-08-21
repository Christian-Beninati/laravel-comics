<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

// COMICS
Route::get('/comics', function () {
    $comics = config('comics'); // config comics
    $related_items = config('related_items'); // config related_items
    return view('comics', compact('comics', 'related_items'));  // View - Compact
})->name('comics');

// COMIC
Route::get('/comic/{index}', function ($index) {
    $comics = config("comics");
    $comic = $comics[$index];
    // Prev and Next
    $last_index = count($comics) - 1;
    $prev = $index > 0 ? $index - 1 : $last_index;
    $next = $index == $last_index ? 0 : $index + 1;

    return view('comic', compact("comic", "next", "prev"));
})->name("comic");


Route::get('/caracters', function () {
    return view('caracters');
})->name('caracters');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
