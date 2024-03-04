<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\produkController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});








// Route::get('/login/admin',[adminController::class,'index']);
// Route::post('/login/admin',[adminController::class,'proses_login']);
// // Route::get('/tampilan/admin',[adminController::class,'tampilan_admin']);
// Route::post('/tambah-admin',[adminController::class,'buat_akun']);
// Route::get('/tambah-admin',[adminController::class, 'tbuat']);
// Route::get('/logout-a',[adminController::class,'logout']);
    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::post('/login',[AuthController::class,'loginPost'])->name('login');
    // Route::post('/login',function(){
    //     return 'login';})->name('login');
    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::post('/register',[AuthController::class,'registerPost'])->name('register');

// Route::middleware(['auth'])->group(function () {
    Route::get('/home', [dashboardController::class,'home']);
    Route::get('/logout',[PetugasController::class,'logout']);
    Route::get('data-produk',[produkController::class,'data_p']);
    Route ::get('/hapus-produk/{id}', [produkController::class,'hapus']);
    Route ::get('/update-produk/{id}', [produkController::class, 'update']);
    Route ::post('/update-produk/{id}', [produkController::class, 'proses_update']);
    Route::get('stok', [produkController::class,'stok']);

    Route::get('/tambah-produk',[produkController::class, 'tambah_produk']);
    Route::post('/tambah-produk', [produkController::class, 'proses_tambah_produk']);
    Route::get('data-pelanggan',[pelangganController::class,'data_P']);
    Route ::get('/hapus-pelanggan/{id}', [pelangganController::class,'hapus']);
    Route ::get('/update-pelanggan/{id}', [pelangganController::class, 'update']);
    Route ::post('/update-pelanggan/{id}', [pelangganController::class, 'proses_update']);
    Route::get('/tambah-pelanggan',[pelangganController::class, 'tambah_pelanggan']);
    Route::post('/tambah-pelanggan', [pelangganController::class, 'proses_tambah_pelanggan']);

    Route::get('/tambah-penjualan',[PenjualanController::class,'penjualan']);
    Route::post('/tambah-penjualan',[PenjualanController::class,'tambah']);
    Route ::get('/cancel-produk/{id}', [PenjualanController::class,'cancel']);
    Route::get('/data-penjualan',[PenjualanController::class,'data_penjualan']);
    Route::get('/detail-penjualan/{id}',[PenjualanController::class,'detail']);
    Route::post('Checkout',[PenjualanController::class,'checkout']);
    
// });