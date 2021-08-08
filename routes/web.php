<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
});



//Dashboard
Route::get('/dashboard',function(){
    return view('layouts/layout');

})->middleware('auth');


Route::get('/index',function(){
    return view('administrador/personal/index');
});
/*

Route::get('/personal','personalController@index')->name('personal.index');
Route::get('/personal/crear','personalController@create')->name('personal.create');
Route::get('/personal/{personal}/editar','personalController@edit')->name('personal.edit');
Route::patch('/personal/{personal}','personalController@update')->name('personal.update');
Route::post('/personal','personalController@store')->name('personal.store');
Route::get('/personal/{personal}','personalController@show')->name('personal.show');
Route::delete('/personal/{personal}','personalController@destroy')->name('personal.destroy'); */
Route::resource('personal','personalController')->names('personal');
Route::resource("clientes","ClientesController");
Route::resource("productos","ProductosController");
Route::resource("bancos", "BancosController");
/* Route::resource("creditos", "CreditosController");  */
/* Route::resource("formaPago", "formaPagoController"); */
Route::get("/formaPago", "formaPagoController@index")->name("formaPago.formaPago_index");

Route::get("/ventas/ticket", "VentasController@ticket")->name("ventas.ticket");
Route::resource('ventas','VentasController'); 

Route::get("/vender", "VenderController@index")->name("vender.index");
Route::post("/productoDeVenta", "VenderController@agregarProductoVenta")->name("agregarProductoVenta");
Route::delete("/productoDeVenta", "VenderController@quitarProductoDeVenta")->name("quitarProductoDeVenta");
Route::post("/terminarOCancelarVenta", "VenderController@terminarOCancelarVenta")->name("terminarOCancelarVenta");
Route::post("/terminarVenta", "VenderController@terminarVenta")->name("terminarVenta");



Route::get("/creditos", "CreditosController@index")->name("creditos.index");
Route::get('/creditos/{creditos}/editar','CreditosController@edit')->name('creditos.edit');
Route::patch('/creditos/{creditos}','CreditosController@update')->name('creditos.update');
Route::get("/creditos/show", "CreditosController@show")->name("creditos.show");

Route::post("/productoDeVent", "CreditosController@agregarProductoVent")->name("agregarProductoVent");
Route::delete("/productoDeVent", "CreditosController@quitarProductoDeVent")->name("quitarProductoDeVent");
Route::post("/terminarOCancelarVent", "CreditosController@terminarOCancelarVent")->name("terminarOCancelarVent");
Route::post("/terminarVent", "CreditosController@terminarVent")->name("terminarVent");

Auth::routes();

/*Lista de usuarios -> asignacion de rol */
Route::resource('/user', UserController::class)->names('users');
/*Rol */
Route::resource('/role', roleController::class)->names('roles');

