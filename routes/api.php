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


Route::post('/hosts/device/new', function(Request $request) {    
    return $request;
        $token = Token::findOrfail($request->token);
        $device = Device::findOrFail($resquest->device_id);
    return $device->status;
});

Route::get('/hosts/devices/{id}', function($id) {
    return Device::All();
});
