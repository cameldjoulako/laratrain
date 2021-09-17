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
    return view('welcome');
});

//route basique renvoyant un texte
/* Route::get('posts', function () {
    return "liste d'articles";
}); */

//renvoyer une liste de post en json
Route::get('posts', function () {
    return response()->json([
        'title' => 'Apprendre Laravel',
        'description' => 'Formation par la pratique sur le framework Laravel 8',
    ]);
});

//renvoyer une vue

Route::get('articles', function () {
    return view('articles');
});
