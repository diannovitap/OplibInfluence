<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\OpenCoursewareController;
use App\Http\Controllers\TentangKamiController;
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
Route::get('/opencourseware', [OpenCoursewareController::class, 'index'])->name('opencourseware.index');
Route::get('/tentangkami', [TentangKamiController::class, 'tentangkami'])->name('tentangkami.index');

// Full Site
Route::get('/fullsite/katalog', [FullSiteController::class, 'katalog'])->name('katalog.fullsite');
Route::get('/fullsite/katalog/detail', [FullSiteController::class, 'katalogDetail'])->name('katalogdetail.fullsite');
Route::get('/fullsite/katalog/detail/download', [FullSiteController::class, 'katalogDetailDownload'])->name('katalogdetaildownload.fullsite');
Route::get('/fullsite/keanggotaan', [FullSiteController::class, 'keanggotaan'])->name('keanggotaan.fullsite');
Route::get('/fullsite/dokumen', [FullSiteController::class, 'dokumen'])->name('dokumen.fullsite');
Route::get('/fullsite/laporan', [FullSiteController::class, 'laporan'])->name('laporan.fullsite');
Route::get('/fullsite/tentangkami', [FullSiteController::class, 'tentangkami'])->name('tentangkami.fullsite');
Route::get('/fullsite/tahunterbit', [FullSiteController::class, 'tahunterbit'])->name('tahunterbit.fullsite');
Route::get('/fullsite/informasi', [FullSiteController::class, 'informasi'])->name('informasi.fullsite');
Route::get('/fullsite/informasi/layanan-dokumen-delivery-service', [InformasiController::class, 'layanan'])->name('informasi-layanan.fullsite');
Route::get('/fullsite/informasi/user-guider-author-dan-reviewer-jurnal-terlkatika', [InformasiController::class, 'telkatika'])->name('informasi-telkatika.fullsite');
Route::get('/fullsite/informasi/peminjaman-buku-melalui-delivery-service', [InformasiController::class, 'peminjamanbuku'])->name('informasi-peminjamanbuku.fullsite');
Route::get('/fullsite/informasi/open-library-book-review-competition', [InformasiController::class, 'openlibrary'])->name('informasi-openlibrary.fullsite');
Route::get('/fullsite/informasi/surat-bebas-kewajiban-perpustakaan', [InformasiController::class, 'sbkp'])->name('informasi-sbkp.fullsite');
Route::get('/fullsite/informasi/fasilitas-cek-similarity-ithenticate-dan-turnitin', [InformasiController::class, 'similarity'])->name('informasi-similarity.fullsite');
Route::get('/fullsite/informasi/standar-layanan-open-library', [InformasiController::class, 'standar'])->name('informasi-standar.fullsite');
Route::get('/fullsite/informasi/cara-akses-koleksi-electronic-book-open-library', [InformasiController::class, 'electronicbook'])->name('informasi-electronicbook.fullsite');
Route::get('/fullsite/informasi/layanan-assistive-technology', [InformasiController::class, 'assistive'])->name('informasi-assistive.fullsite');
Route::get('/fullsite/informasi/cara-akses-scopus', [InformasiController::class, 'scopus'])->name('informasi-scopus.fullsite');



Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::middleware(['auth', 'verified'])->group(function () {
});
require __DIR__.'/auth.php';
