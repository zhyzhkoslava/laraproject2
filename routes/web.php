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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', 'IndexController@index');

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/support', 'IndexController@getSupport');

//Route::get('/{id}','IndexController@getProduct')->name('productShow');

Auth::routes();





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
