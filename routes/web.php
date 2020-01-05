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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('plantilla');
});

Route::get('/index', function () {
    return view('plantilla');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/admin', function () {
    return view('admin');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route:: get("/login", "LoginController@login");

//RUTAS PERFIL
Route::get('/perfil/{id}', 'UserController@verInfoUsuario')->middleware('auth');
Route::get('/editarperfil/{id}', 'UserController@traerDatos')->middleware('auth');
Route::post('/editarperfil/{id}', 'UserController@editarDatos')->middleware('auth');

// Route::get('/editarperfil', function () {
//     return view('editarperfil');
// });

//RUTAS DE ADMINISTRADORES
Route::get ("/adminProducts", "ProductController@listado");