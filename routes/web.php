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

// Route::get('/', function () {
//     return view('plantilla');
// });

Route::get ("/", "IndexController@listado");
Route::get ("/index", "IndexController@listado");
Route::get ("/home", "IndexController@listado");

//ver inicio
// Route::get('/index', function () {
//     return view('plantilla');
// });

Route::get('/faq', function () {
    return view('faq');
});
// Route:: get("/login", "HomeController@login");
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::post('/home/{id}', 'HomeController@login')->name('home');



//RUTAS PERFIL
Route::get('/perfil/{id}', 'UserController@verInfoUsuario')->middleware('auth');
Route::get('/editarperfil/{id}', 'UserController@traerDatos')->middleware('auth');
Route::post('/editarperfil/{id}', 'UserController@editarDatos')->middleware('auth');
Route::get('/borrarCuenta/{id}', 'UserController@CuentaDestroy')->middleware('auth');

//RUTAS DE ADMINISTRADORES

Route::get ("/adminProducts", "ProductController@listado");//Es para el boton de listado de productos en admin
Route::post ("/adminProducts", "ProductController@store");
Route::get('/editarProducts/{id}', 'ProductController@verProduct');
Route::post('/editarProducts/{id}', 'ProductController@editarProd');
Route::get('/borrarProducts/{id}', 'ProductController@ProductDestroy');
Route::get('/verProduct/{id}', 'CartController@verProduct');

Route::get('/admin', function () {
    return view('admin'); //formulario de carga de productos
});

//RUTAS DE CARRITO

//Es muy importante el orden de las rutas, ya que puede entrar primero a una y luego a otra
//En este caso le ponemos view porque queremos que sea una vista, y ese es el segundo parametro
// el nombre de la vista "cart", el primero es la ruta "/cart", el middleware("auth"), es para
// que solo ingresen quienes estan logueados.
Route::view("/carrito", "cart")->name ("cart")->middleware("auth");
Route::view("/orders","orders")->name("orders");

// Route::get ("/cart", "CartController@listado")->name('cart')->middleware('auth');;

Route::post('/carrito/{productId}', 'CartController@addProduct')->name('addProductToCart');
Route::delete("/carrito/{productId}","CartController@deleteProduct")->name('deleteProductFromCart');
// Route::POST ("/cart", "CartController@listado");
// Route::get('/cart', 'CartController@listado')->name('cart')->middleware('auth');

Route::post('/orders', "OrdersController@createOrder")->name("createOrder");