<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SessionController;
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
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});
Route::get('form_barang', function () {
    return view('form/form_barang');
});
Route::get('login', [SessionController::class, 'index'])->name('login'); 
Route::post('login', [SessionController::class, 'login'])->name('login'); 
Route::resource('admin', BarangController::class)->middleware('isLogin');
Route::get('tabel_barang', [BarangController::class, 'index'])->name('tabel_barang'); 
Route::get('delete_barang/{id}', [BarangController::class, 'destroy'])->name('delete_barang'); 
Route::get('edit_barang/{id}', [BarangController::class, 'edit'])->name('edit_barang'); 
Route::post('edit_barang/{id}', [BarangController::class, 'update'])->name('update'); 
Route::get('file', [BarangController::class, 'create']); 
Route::post('file', [BarangController::class, 'store']);
