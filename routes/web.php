<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Login.inicio');
});

Route::get('tablero', function() {
    return view('tablero');
}); 

Route::get('productos','ProductoController@Index');
Route::post('productos/categoria','ProductoController@InsertCategoria');
Route::post('productos/entrada','ProductoController@InsertEntrada');
Route::post('productos/salida','ProductoController@InsertSalida');
Route::post('productos/producto','ProductoController@InsertProducto');
Route::post('productos/buscar','ProductoController@BuscarProducto');

Route::get('proveedores', function() {
    return view('proveedores');
});
Route::get('inventario', function() {
    return view('inventario');
});

Route::get('ticket', function() {
    return view('rep_ticket');
});

Route::get('ventas', function() {
    return view('ventas');
});

Route::get('perdidas', function() {
    return view('perdidas');
});

Route::get('estadisticas', function() {
    return view('estadisticas');
});

Route::get('mercancia', function() {
    return view('mercancia');
});
Route::get('empleados', function() {
    return view('empleados');
});
Route::get('cortes', function() {
    return view('cortes');
});
Route::get('postventa', function() {
    return view('postventa');
});
