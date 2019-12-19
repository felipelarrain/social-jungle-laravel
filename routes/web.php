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

Route::get('/', function(){
  return view('inicio');
});

//Ruta para configuracion

Route::get('/configuracion', function(){
  return view('usuario.configuracion');})->middleware('auth');

Route::get('configuracion', 'AdministrarUsuarioController@config');


Route::post('user/update','AdministrarUsuarioController@update');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/notificaciones ', function () {
    return view('notificaciones');
})-> middleware('auth');


//Ruta que tiene que ver con los temas

Route::get('/temasreg', 'TemasController@index')->middleware('auth');

Route::get('/post', 'PostController@index')->name('post')->middleware('auth');

Route::get('/temas/{id}', 'TemasController@temas', function () {
  //return view('TemasController@temas');
  return view(dd($id));
 });