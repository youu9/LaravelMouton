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

Auth::routes();

Route::get('/home', 'FrontController@spends')->name('home')->middleware('auth');
Route::get('chart', 'ChartController@index')->name('chart')->middleware('auth');
Route::get('addSpend', 'FrontController@addSpend')->name('addSpend')->middleware('auth');
Route::get('/admin', 'FrontController@adminPage')->name('admin')->middleware('auth');

// Route::post('store', 'FrontController@storeSpend')->name('store')->middleware('auth');

Route::resource('spend', 'SpendController')->middleware('auth');
