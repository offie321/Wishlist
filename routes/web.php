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

Route::get('/beheer' , 'WishController@beheer');
Route::resource('wish', 'WishController');

//Route::get('/wish', 'WishController@index');
//
////Route::get('/beheer', function () {
////    return view('beheer');
////});
//
//Route::get('/beheer', 'WishController@beheer');
//
//Route::get('/beheer/create', 'WishController@create');
//
//Route::post('/beheer', 'WishController@store')->name('beheer');
//
//Route::get('/beheer/{id}/edit', 'WishController@edit')->name('edit');
//
//Route::put('/beheer/{id}', 'WishController@update')->name('update');
//
//Route::delete('/beheer/{id}', 'WishController@destroy')->name('destroy');


//Route::resource('wishes', 'WishController');


