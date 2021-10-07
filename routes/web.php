<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $title = "Movies";
    return view('home', compact('title'));
})->name('home');

Route::get('/movies', function () {
    $movies = [];
    return view('movies.index', compact('movies'));
})->name('movies.index');
