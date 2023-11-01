<?php

use App\Http\Controllers\Backend\ApiPengalamanKerjaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Backend'], function() {
    Route::get('api_pengalamankerja', 'ApiPengalamanKerjaController@getAll');
    Route::get('api_pengalamankerja/{id}', 'ApiPengalamanKerjaController@getPen');
    Route::post('api_pengalamankerja', 'ApiPengalamanKerjaController@createPen');
    Route::put('api_pengalamankerja/{id}', 'ApiPengalamanKerjaController@updatePen');
    Route::delete('api_pengalamankerja/{id}', 'ApiPengalamanKerjaController@deletePen');
});