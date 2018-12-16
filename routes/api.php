<?php

use Illuminate\Http\Request;
use App\Token;
use App\Device;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return Auth::user();
});

Route::get('/hosts/devices/{id}', function($id) {
    return Device::All();
});
