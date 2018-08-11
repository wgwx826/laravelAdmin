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

Route::get('/','Home\IndexController@index');

Route::any('dynamic','Home\IndexController@dynamic');
Route::any('about','Home\IndexController@about');
Route::any('contact','Home\IndexController@contact');


Route::any('test','Test\OrderController@makeOrder');
Route::any('test_r','Test\OrderController@mostRequest');