<?php

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


//Auth::routes();
Route::get('login', 'Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/', 'ArticleController@index')->name('articles.index');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/articles/edit', 'ArticleController@create');
    Route::get('articles/show/{id}', 'ArticleController@show')->name('articles.show');
    Route::put('/articles/{id}/update', 'ArticleController@update')->name('articles.update');
    Route::delete('/articles/destroy/{id}', 'ArticleController@destroy')->name('articles.destroy');
    Route::post('/{id}', 'ArticleController@edit')->name('articles.edit');
    Route::post('/articles/edit', 'ArticleController@create')->name('articles.create');
    Route::post('/articles/store', 'ArticleController@store')->name('articles.store');

    //Route::resource('/articles','ArticleController');
});

Route::get('/{id}', 'ArticleController@show')->name('show');


