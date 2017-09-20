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
Route::get('/blog/bin', 'BlogController@bin')->name('blog/bin');
Route::get('/blog/bin/{id}/restore', 'BlogController@restore')->name('blog/restore');
Route::delete('/blog/bin/{id}/destroyblog', 'BlogController@destroyBlog')->name('blog/destroyBlog');
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
//Route::get('/URL', 'controlador@funcion')->name('nombre');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/create', 'BlogController@create')->name('blog/create');
Route::post('/blog/store', 'BlogController@store')->name('blog/store');
Route::get('/blog/{id}', 'BlogController@show')->name('blog/show');
Route::get('/blog/{id}/edit', 'BlogController@edit')->name('blog/edit');
Route::patch('/blog/{id}', 'BlogController@update')->name('blog/update');
Route::delete('/blog/{id}', 'BlogController@destroy')->name('blog/destroy');
