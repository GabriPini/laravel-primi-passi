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
    $greetings = 'Hello World';
    $name = 'Gabriele Pini';
    return view('home' , compact('greetings','name'));
})->name('home');

Route::get('/fav', function () {
    $name = 'Gabriele Pini';
    $posts = ['Starwars','Mandalorian','The Book of boba','Obi Wan'];

    return  view('fav', compact('name','posts'));

})->name('fav');