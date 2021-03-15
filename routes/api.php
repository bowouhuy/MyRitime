<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/articles', 'App\Http\Controllers\ArticleController@index');
Route::post('/article/store', 'App\Http\Controllers\ArticleController@store');
Route::get('/article/edit/{id}', 'App\Http\Controllers\ArticleController@getArticle');
Route::get('/article/show/{id}', 'App\Http\Controllers\ArticleController@getArticle');
Route::put('/article/update/{id}', 'App\Http\Controllers\ArticleController@update');
Route::delete('/article/delete/{id}', 'App\Http\Controllers\ArticleController@delete');
