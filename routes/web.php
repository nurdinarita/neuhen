<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\InformasiController;

use Cviebrock\EloquentSluggable\Services\SlugService;


use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\KegiatanController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\GalleryController;

Route::get('check_slug', function () {
    $slug = SlugService::createSlug(App\Models\News::class, 'slug', request('title'));
    return response()->json(['slug' => $slug]);
});

// Beranda
Route::get('/', [HomeController::class, 'index']);
Route::get('/{slug}/show', [HomeController::class, 'show']);
// Akhir Beranda

// Profil
Route::get('/sejarah', [ProfilController::class, 'sejarah']);
Route::get('/visi&misi', [ProfilController::class, 'visimisi']);
Route::get('/struktur-organisasi', [ProfilController::class, 'struktur_organisasi']);
// Akhir Profil

// Formulir
Route::get('/formulir', [FormulirController::class, 'index']);
Route::get('/form/formulir-permohonan-pindah-wni-dalam-satu-gampong', [FormulirController::class, 'formulir_permohonan_pindah_wni_dalam_satu_gampong']);
Route::post('/form/pindah-masuk-gampong', [FormulirController::class, 'formulir_permohonan_pindah_wni_dalam_satu_gampong_store']);
Route::get('/form/pindah-masuk-kab-kec', [FormulirController::class, 'pindah_masuk_gampong']);
// Akhir Formulir

// Informasi
/* Berita */
Route::get('/informasi/berita', [InformasiController::class, 'berita']);
Route::get('/{slug}/show', [InformasiController::class, 'beritaShow']);
/* Akhir Berita */
// Akhir Informasi
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard')->with(['title' => 'Dashboard']);
});

Route::resource('/admin/berita-gampong', BeritaController::class);
Route::resource('/admin/kegiatan-gampong', KegiatanController::class);
Route::resource('/admin/pengumuman', PengumumanController::class);
Route::resource('/admin/gallery', GalleryController::class);
// Route::get('/admin/berita-gampong/search', [BeritaController::class, 'search']);

