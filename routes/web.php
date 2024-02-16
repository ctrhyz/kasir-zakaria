<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetailPenjualanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;

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

// Dashboard

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/', function () {
    return redirect('/produk');
});

// Produk
Route::get('/produk',[ProdukController::class,'index'])->middleware('auth');
Route::post('/produk/simpan',[ProdukController::class,'simpan'])->middleware('auth');
Route::get('/produk/{ProdukID}/edit',[ProdukController::class,'edit'])->middleware('auth');
Route::put('/produk/{ProdukID}',[ProdukController::class,'update'])->middleware('auth');
Route::delete('/produk/{ProdukID}',[ProdukController::class,'delete'])->middleware('auth');

// Pelanggan
Route::get('/pelanggan',[PelangganController::class,'index'])->middleware('auth');
Route::post('/pelanggan/simpan',[PelangganController::class,'simpan'])->middleware('auth');
Route::get('/pelanggan/{PelangganID}/edit',[PelangganController::class,'edit'])->middleware('auth');
Route::put('/pelanggan/{PelangganID}',[PelangganController::class,'update'])->middleware('auth');
Route::delete('/pelanggan/{PelangganID}',[PelangganController::class,'delete'])->middleware('auth');

// Penjualan
Route::get('/penjualan',[PenjualanController::class,'index'])->middleware('auth');
Route::post('/penjualan/simpan',[PenjualanController::class,'simpan'])->middleware('auth');
Route::get('/penjualan/{PenjualanID}/edit',[PenjualanController::class,'edit'])->middleware('auth');
Route::put('/penjualan/{PenjualanID}',[PenjualanController::class,'update'])->middleware('auth');
Route::delete('/penjualan/{PenjualanID}',[PenjualanController::class,'delete'])->middleware('auth');

// DetailPenjualan
Route::get('/detailpenjualan',[DetailPenjualanController::class,'index'])->middleware('auth');
Route::post('/detailpenjualan/simpan',[DetailPenjualanController::class,'simpan'])->middleware('auth');
Route::get('/detailpenjualan/{DetailID}/edit',[DetailPenjualanController::class,'edit'])->middleware('auth');
Route::put('/detailpenjualan/{DetailID}',[DetailPenjualanController::class,'update'])->middleware('auth');
Route::delete('/detailpenjualan/{DetailID}',[DetailPenjualanController::class,'delete'])->middleware('auth');

// Authentication
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'aksi_login']);
Route::get('/register',[AuthController::class,'register']);
Route::post('/register',[AuthController::class,'aksi_register']);
Route::post('/logout',[AuthController::class,'logout']);
