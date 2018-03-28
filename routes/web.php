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

Route::get('/', 'HomeController@index');
Route::get('/article/{uri}', 'ArticlesController@view');

Route::get('/about', function() {
	return view('pages.about');
});


Route::get('/blog', 'BlogController@index');
Route::get('/blog/view/{id}', 'BlogController@view');
