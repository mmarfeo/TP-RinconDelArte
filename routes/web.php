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






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route:: get("/login", "LoginController@login");

//RUTAS PERFIL
Route::get('/perfil/{id}', 'UserController@verInfoUsuario')->middleware('auth');
Route::get('/editarperfil/{id}', 'UserController@traerDatos')->middleware('auth');
Route::post('/editarperfil/{id}', 'UserController@editarDatos')->middleware('auth');
Route::get('/borrarCuenta/{id}', 'UserController@CuentaDestroy')->middleware('auth');

// Route::get('/editarperfil', function () {
//     return view('editarperfil');
// });

//RUTAS DE ADMINISTRADORES
Route::get ("/adminProducts", "ProductController@listado");
Route::get ("/adminProducts", "ProductController@listado");//Es para el boton de listado de productos en admin
Route::post ("/adminProducts", "ProductController@store");
Route::get('/editarProducts/{id}', 'ProductController@verProduct');
Route::post('/editarProducts/{id}', 'ProductController@editarProd');
Route::get('/borrarProducts/{id}', 'ProductController@ProductDestroy');

Route::get('/admin', function () {
    return view('admin');
});

// Route::get('/admin/', "ProductController@create");


