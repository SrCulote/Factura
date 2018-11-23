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
    return view('welcome');
});

Route::resource('/admin/clientes', 'ClientesController');

Route::resource('/admin/facturas', 'FacturasController');

Route::resource('/admin/productos', 'ProductosController');

Route::resource('/admin/vendedores', 'VendedoresController');
