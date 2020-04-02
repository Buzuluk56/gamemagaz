<?php

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
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    $table = DB::table('games')->get();
    return view('index',compact('table'));
});
Route::get('/category/{category}', function ($category) {
    $tables = DB::table('games')->find($category);
    return view('show',compact('category'));
});

Route::get('about', function () {
    return view('about');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
