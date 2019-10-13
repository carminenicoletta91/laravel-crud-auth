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


Route::get('/','controllerGuestCat@index')->name('ctgst.index');
Auth::routes();
Route::get('/homeuser','controllerAuthCat@index')->name('ctusr.index');
Route::get('/create','controllerAuthCat@create')->name('ctusr.create');
Route::post('/homeuser','controllerAuthCat@store')->name('ctusr.store');
Route::get('/edit{id}','controllerAuthCat@edit')->name('ctusr.edit');
Route::post('/homeuser{id}','controllerAuthCat@update')->name('ctusr.update');
Route::get('/homeuser{id}','controllerAuthCat@destroy')->name('ctusr.destroy');
