<?php

use Illuminate\Support\Facades\Route;




Route::get('/','GamesController@index');
Route::get('/id={id}','GamesController@name');
Route::get('/category/{category}','GamesController@show');
Route::get('/about','GamesController@about');
Route::get('/send','GamesController@send');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
