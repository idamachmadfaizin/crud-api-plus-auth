<?php

use Illuminate\Http\Request;

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

Route::apiResource('user', 'UserController');

Route::get('article', 'ArticleController@index')->name('article.index');
Route::get('article/{article}', 'ArticleController@show')->name('article.show');

Route::middleware('auth:api')->group(function(){
    Route::post('article', 'ArticleController@store')->name('article.store');
    Route::put('article/{article}', 'ArticleController@update')->name('article.update');
    Route::delete('article/{article}', 'ArticleController@destroy')->name('article.destroy');
});
