<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LelangController;

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

Route::get('/',[MasyarakatController::class,'index']);
Route::get('/masyarakat',[MasyarakatController::class,'index']);
Route::post('masyarakat/tambah',[MasyarakatController::class,'tambah']);
Route::post('masyarakat/hapus',[masyarakatController::class,'hapus']);
Route::post('masyarakat/edit',[masyarakatController::class,'edit']);


Route::get('barang',[BarangController::class,'index']);
Route::get('lelang',[LelangController::class,'index']);
