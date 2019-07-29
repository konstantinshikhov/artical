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
Route::get('/', 'ArticleController@index')->name('article');

Route::group(['middleware'=>['auth']],function(){
   Route::resource('/articles','ArticleController');
});

//Route::get('articles/{id}','ArticleController@show');

Route::get('articles/{id}',function(){
   die('hello');
});