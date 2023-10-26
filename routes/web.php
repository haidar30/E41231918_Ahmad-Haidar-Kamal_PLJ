<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PengalamanKerjaController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\managementUserController;
use App\Http\Controllers\Backend\PendidikanController;
use App\Http\Controllers\SessionController;
use App\Http\Middleware\CheckAge;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('frontend.home');
});

Route::resource('/user', ManagementUserController::class);

Route::get('session/create', [SessionController::class, 'create']);
Route::get('session/show', [SessionController::class, 'show']);
Route::get('session/delete', [SessionController::class, 'delete']);

Route::group(['namespace' => 'Frontend'], function(){
    Route::resource('/home', HomeController::class);
});
Route::group(['namespace' => 'Backend'], function(){
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/pendidikan', PendidikanController::class);
    Route::resource('/pengalaman_kerja', PengalamanKerjaController::class);
});

Auth::routes();