<?php

use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\BiodataControllers;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [HomeControllers::class, 'index']);
Route::get('/list', [BiodataControllers::class, 'index']);
Route::get('/tambah_siswa', [BiodataControllers::class, 'create'])->name('tambah-siswa');
Route::post('/store', [BiodataControllers::class, 'store']);

