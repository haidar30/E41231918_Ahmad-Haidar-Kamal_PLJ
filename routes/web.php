<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PengalamanKerjaController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\managementUserController;
use App\Http\Controllers\Backend\PendidikanController;
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

// Route::get('/home', function(){
//     return view("home");
// });

Route::group(['namespace' => 'Frontend'], function(){
    Route::resource('/home', HomeController::class);
});
Route::group(['namespace' => 'Backend'], function(){
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/pendidikan', PendidikanController::class);
    Route::resource('/pengalaman_kerja', PengalamanKerjaController::class);
});

Auth::routes();