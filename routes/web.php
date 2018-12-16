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


Route::get('/', 'HomeController@index');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/docs', 'HomeController@docs')->name('docs');
Route::get('/downloads', 'HomeController@downloads')->name('downloads');

Route::get('/account', 'HomeController@account')->name('account');
Route::patch('/account/update',  ['as' => 'account.update', 'uses' => 'HomeController@updateAccount']);

Route::get('/hosts', 'HostController@index')->name('host.index');

Route::post('/ajax/device/switch', 'DeviceController@updateStatus')->name('device.switch.status');

Route::get('/devices', 'DeviceController@index')->name('device.index');

Route::get('/token', 'TokenController@index')->name('token.index');
Route::post('/token/create', 'TokenController@store')->name('token.add');
