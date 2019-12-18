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

//Pagina de inicio sin estar registrado
Route::get('/', function(){
  return view('inicio');
});


//Ruta para registrarse
Route::get('/register', function () {
    return view('auth/register ');
});

//Ruta para loguearse
Route::get('/login', function(){
  return view('auth/login');
});


//Route::get('/',function(){
  //  return view('inicio');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/temasreg','TemasController@index')->name('temasreg');

Route::get('/notificaciones', function () {
    return view('notificaciones');
});
//Route::get('/temas/{id}', function () {
 //return view('TemasController@temas');
//});

Route::get('/temasreg', 'TemasController@index');
Route::get('/post', 'PostController@index')->name('post');
