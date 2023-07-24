<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\OpenCoursewareController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\InformasiController;
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
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');
    Route::get('/katalog/detail', [KatalogController::class, 'detail'])->name('katalog.detail');

    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/infografis', [InfografisController::class, 'index'])->name('infografis.index');
    Route::get('/tentangkami', [TentangKamiController::class, 'index'])->name('tentangkami.index');
    Route::get('/opencourseware', [OpenCoursewareController::class, 'index'])->name('opencourseware.index');
    Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
require __DIR__.'/auth.php';
