<?php

use App\Http\Controllers\JabatanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\reservasiController;
use App\Http\Controllers\userController;
use App\Http\Controllers\kamarController;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Route::resource('reservasi',reservasiController::class);
Route::resource('master-kamar',kamarController::class);
Route::resource('user',userController::class);
// Route::post('/master-kamar/update', [kamarController::class, 'kamar_update']);
Route::post('/master-kamar/tipe/store', [kamarController::class, 'tipe_store'])->name('tipe.store');
Route::put('/master-kamar/tipe/{id}', [kamarController::class, 'tipe_update'])->name('tipe.update');
Route::post('/master-kamar/tipe/{id}', [kamarController::class, 'tipe_destroy'])->name('tipe.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
