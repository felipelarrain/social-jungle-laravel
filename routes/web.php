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

Route::get('/', function () {
    return view('inicio');
});

Route::get('/configuracion', function(){
  return view ('configuracion');
});

//Route::get('/',function(){
  //  return view('inicio');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
