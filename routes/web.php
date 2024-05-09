<?php

use App\Http\Controllers\StokprodukController;
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

Route::get('/', function () {
    return view('Homepage');
});

Auth::routes();

Route::get('/stokadmin', [App\Http\Controllers\StokprodukController::class, 'index'])->name('show.admin');
Route::delete('stokadmin/{id}', [StokprodukController::class, 'destroy'])->name('delete.stok');

Route::get('/updatestok/{id}', [StokprodukController::class, 'edit'])->name('edit.stok');
Route::patch('/updatestok/{id}', [StokprodukController::class, 'update'])->name('update.stok');

Route::get('/tambahproduk', [App\Http\Controllers\StokprodukController::class, 'create'])->name('tambah.produk');
Route::post('/tambahproduk', [StokprodukController::class, 'store'])->name('tambah.store');

Route::get('/datakontak', [App\Http\Controllers\ContactController::class, 'show'])->name('show');
Route::delete('/datakontak/{id}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('delete.kontak');

Route::delete('/dashboard/{id}', [App\Http\Controllers\PesananController::class, 'destroy'])->name('delete');

Route::get('/edit/{id}', [App\Http\Controllers\PesananController::class, 'edit'])->name('pesanan.edit');
Route::patch('/edit/{id}', [App\Http\Controllers\PesananController::class, 'update'])->name('pesanan.update');

Route::get('/pesanan', [App\Http\Controllers\PesananController::class, 'create'])->name('pesanan');
Route::post('/pesanan', [App\Http\Controllers\PesananController::class, 'store'])->name('pesanan.store');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/homepage', [App\Http\Controllers\HomepageController::class, 'home'])->name('home');
Route::get('/stokproduk', [App\Http\Controllers\StokprodukController::class, 'stok'])->name('stok');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'about'])->name('about');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'create'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');