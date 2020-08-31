<?php
use SimpleDoc\Doc;
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

Route::get('/docs', 'DocController@index');
Route::get('/open/{doc}', 'DocController@open');
Route::post('/sendform/{doc}', 'DocController@send');
Route::post('/newdoc', 'DocController@store');
Route::delete('/delete/{doc}', 'DocController@destroy');
Auth::routes();
Route::get('/home', 'DocController@index');
