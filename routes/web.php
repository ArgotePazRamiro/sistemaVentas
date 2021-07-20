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

Route::get('/',function(){
    return view('home');
});

Route::get('/layout',function(){
    return view('layouts/layout');
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
Route::resource('cliente','clientesController')->names('cliente');
Route::resource('producto','productosController')->names('producto');
Route::resource('ventas','ventasController')->names('ventas');



/* Auth::routes();
 */
