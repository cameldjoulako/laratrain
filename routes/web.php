<?php

use App\Http\Controllers\PostController;
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

//Route::get('/', '\App\Http\Controllers\PostController@index');

//definition avec un tableau
Route::get('/', [PostController::class, 'index']);

//route basique renvoyant un texte
/* Route::get('posts', function () {
    return "liste d'articles";
}); */

//renvoyer une liste de post en json
/* Route::get('posts', function () {
    return response()->json([
        'title' => 'Apprendre Laravel',
        'description' => 'Formation par la pratique sur le framework Laravel 8',
    ]);
}); */

//renvoyer une vue
/*
Route::get('articles', function () {
    return view('articles');
}); */
