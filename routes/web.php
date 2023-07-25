<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\OpenCoursewareController;
use App\Http\Controllers\FullSiteController;
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


Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');
Route::get('/katalog/detail', [KatalogController::class, 'detail'])->name('katalog.detail');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/infografis', [InfografisController::class, 'index'])->name('infografis.index');
Route::get('/tentangkami', [TentangKamiController::class, 'index'])->name('tentangkami.index');
Route::get('/opencourseware', [OpenCoursewareController::class, 'index'])->name('opencourseware.index');
Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi.index');

// Full Site
Route::get('/fullsite/katalog', [FullSiteController::class, 'katalog'])->name('katalog.fullsite');
Route::get('/fullsite/katalog/detail', [FullSiteController::class, 'katalogDetail'])->name('katalogdetail.fullsite');
Route::get('/fullsite/katalog/detail/download', [FullSiteController::class, 'katalogDetailDownload'])->name('katalogdetaildownload.fullsite');
Route::get('/fullsite/keanggotaan', [FullSiteController::class, 'keanggotaan'])->name('keanggotaan.fullsite');
Route::get('/fullsite/dokumen', [FullSiteController::class, 'dokumen'])->name('dokumen.fullsite');
Route::get('/fullsite/laporan', [FullSiteController::class, 'laporan'])->name('laporan.fullsite');
Route::get('/fullsite/informasi', [FullSiteController::class, 'informasi'])->name('informasi.fullsite');
Route::get('/fullsite/tentangkami', [FullSiteController::class, 'tentangkami'])->name('tentangkami.fullsite');
Route::get('/fullsite/tahunterbit', [FullSiteController::class, 'tahunterbit'])->name('tahunterbit.fullsite');


Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::middleware(['auth', 'verified'])->group(function () {
});
require __DIR__.'/auth.php';
