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
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('Usuario','UsuarioController@index');
Route::get('Cliente','ClienteController@index');
Route::get('Producto','ProductoController@index');
Route::get('Compra','CompraController@index');
Route::get('CompraDetalle','CompraDetalleController@index');
Route::get('Venta','VentaController@index');
Route::get('VentaDetalle','VentaDetalleController@index');
Route::get('Proveedores','ProveedoresController@index');
