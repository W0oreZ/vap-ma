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

Route::get('/', 'PageController@home')->name('home');
Route::get('/apropos', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');

Auth::routes();
Route::resource('profile', 'ProfileController');
Route::resource('annonce', 'AnnonceController');
Route::post('annonce/upload','AnnonceController@upload')->name('annonce.upload');
