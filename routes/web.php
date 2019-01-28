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

Route::get('/main', function () {
    return view('contenido/contenido');
})->name('main');

Route::get('/categoria', 'CategoriaController@index');
Route::post('/categoria/registrar', 'CategoriaController@store');
Route::put('/categoria/actualizar', 'CategoriaController@update');
Route::put('/categoria/desactivar', 'CategoriaController@desactivar');
Route::put('/categoria/activar', 'CategoriaController@activar');
Route::get('/categoria/selectCategoria', 'CategoriaController@selectCategoria');

Route::get('/articulo', 'ArticuloController@index');
Route::post('/articulo/registrar', 'ArticuloController@store');
Route::put('/articulo/actualizar', 'ArticuloController@update');
Route::put('/articulo/desactivar', 'ArticuloController@desactivar');
Route::put('/articulo/activar', 'ArticuloController@activar');
Route::get('/articulo/buscarArticulo', 'ArticuloController@buscarArticulo');
Route::get('/articulo/listarArticulo', 'ArticuloController@listarArticulo');
Route::get('/articulo/buscarArticuloVenta', 'ArticuloController@buscarArticuloVenta');
Route::get('/articulo/listarArticuloVenta', 'ArticuloController@listarArticuloVenta');
Route::get('/articulo/listarPdf','ArticuloController@listarPdf')->name('articulos_pdf');


Route::get('/cliente', 'ClienteController@index');
Route::post('/cliente/registrar', 'ClienteController@store');
Route::put('/cliente/actualizar', 'ClienteController@update');

Route::get('/proveedor', 'ProveedorController@index');
Route::post('/proveedor/registrar', 'ProveedorController@store');
Route::put('/proveedor/actualizar', 'ProveedorController@update');
Route::get('/proveedor/selectProveedor', 'ProveedorController@selectProveedor');

Route::get('/rol', 'RolController@index');
Route::get('/rol/selectRol', 'RolController@SelectRol');

Route::get('/user', 'UserController@index');
Route::post('/user/registrar', 'UserController@store');
Route::put('/user/actualizar', 'UserController@update');
Route::put('/user/desactivar', 'UserController@desactivar');
Route::put('/user/activar', 'UserController@activar');

Route::get('/', 'Auth\LoginController@showLoginForm');//para acceder la login
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ingreso', 'IngresoController@index');
Route::post('/ingreso/registrar', 'IngresoController@store');
Route::put('/ingreso/desactivar', 'IngresoController@desactivar');
Route::get('/ingreso/obtenerCabecera', 'IngresoController@obtenerCabecera');
Route::get('/ingreso/obtenerDetalles', 'IngresoController@obtenerDetalles');
Route::get('/ingreso/listarpdfingresos','IngresoController@cargaringresoPdf')->name('ingreso_pdf');

Route::get('/venta', 'VentaController@index');
Route::post('/venta/registrar', 'VentaController@store');
Route::put('/venta/desactivar', 'VentaController@desactivar');
Route::get('/venta/obtenerCabecera', 'VentaController@obtenerCabecera');
Route::get('/venta/obtenerDetalles', 'VentaController@obtenerDetalles');
Route::get('/venta/listarPdfventa','VentaController@listarPdfventa')->name('ventas_pdf');
Route::get('/venta/pdf/{id}','VentaController@pdf')->name('venta_pdf');

Route::get('/cliente/selectCliente', 'ClienteController@selectCliente');