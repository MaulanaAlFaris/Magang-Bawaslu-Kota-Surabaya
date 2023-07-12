<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\formBawasluController;
use App\Http\Controllers\formController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/a', function () {
//     return view('admin.tes');
// });
Route::get('/tes', function () {
    return view('content.layouts.layouts');
});
Route::get('/', function () {
    return view('content.dashboard');
});
Route::resource('admin',adminController::class);
Route::resource('kota',KotaController::class);
//Route::resource('login', loginController::class);
Route::controller(LoginController::class)->group(function(){
    Route::get('login','index')->name('login');
    Route::post('login/process','process');
    Route::get('logout','logout');
});
Route::group(['middleware'=>['auth']],function(){
    Route::group(['middleware'=>['cekUserLogin:1']],function(){
        Route::resource('admin',adminController::class);
    });

    Route::group(['middleware'=>['cekUserLogin:2']],function(){
        Route::resource('kota',KotaController::class);
    });

    Route::group(['middleware'=>['cekUserLogin:3']],function(){
        Route::resource('kecamatan',KecamatanController::class);
    });

    Route::group(['middleware'=>['cekUserLogin:4']],function(){
        Route::resource('kelurahan',KelurahanController::class);
    });
});
Route::resource('form',formController::class);
Route::resource('formBawaslu',formBawasluController::class);
