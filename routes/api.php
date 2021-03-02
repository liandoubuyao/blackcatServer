<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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
//  设置允许跨域
// header('Access-Control-Allow-Origin:*');
// header('Access-Control-Allow-Methods:GET,POST,PUT,DELETE');
// header('Access-Control-Allow-Headers:Origin, Content-Type, Cookie, Accept, X-CSRF-TOKEN');
// header('Access-Control-Allow-Credentials:true');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login','App\Http\Controllers\UserController@index');
Route::post('/healthInformation/save','App\Http\Controllers\HealthInformationSaveController@index');
Route::post('/healthInformation/list','App\Http\Controllers\HealthInformationListController@index');

