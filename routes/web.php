<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('data_barang', [BarangController::class, "index"])->name('halaman.data_barang.index');
Route::get('tambah_barang', [BarangController::class, "create"])->name('halaman.data_barang.create');
Route::post('tambah', [BarangController::class, "store"]);
Route::get('edit_barang/{id}', [BarangController::class, "edit"])->name('halaman.data_barang.edit');
Route::put('data_barang/{id}', [BarangController::class, "update"]);
Route::get('hapus_barang/{id}', [BarangController::class, "delete"]);
Route::delete('/barang/{id}', [BarangController::class, "destroy"]);

require __DIR__.'/auth.php';
