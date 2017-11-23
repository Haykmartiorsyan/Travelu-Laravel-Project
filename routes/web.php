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

Route::get('/', 'PagesController@index');
Route::resource('tours', 'ToursController');
Route::get('about', 'PagesController@about');
Route::resource('blog', 'PostController');
Route::get('contact', 'PagesController@contact');

Route::get('/dashboard', function () {
    return view('admin.layout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('login', function (){
    return view('auth.login');
});
