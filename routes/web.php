<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These`    
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','HomeController@index')->name('welcome');

Route::post("selectTownship","HomeController@selectTownship")->name("selectTownship");

Route::resource('trades','TradeController');
Route::resource('tradeposts','TradePostController');

Route::resource('banks','BankController');

Route::resource('abouts','AboutController');
Route::resource('contacts','ContactController');

Route::middleware(["auth"])->group(function(){    
    Route::resource('posts','PostController');
    Route::resource('accounts','AccountController');    
});

Auth::routes(['verify' => true]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
