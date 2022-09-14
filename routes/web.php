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
    $data = ['title' => 'Ritorno al futuro', 'genre' => 'Sci-Fi', 'year' => '1985', 'director' => 'Robert Zemeckis'];
    return view('home', $data);
});
