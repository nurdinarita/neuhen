<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\InformasiController;

use Cviebrock\EloquentSluggable\Services\SlugService;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\KegiatanController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\Admin\FormulirMasukController;
use App\Http\Controllers\Admin\KartuKeluargaController;
use App\Http\Controllers\Admin\DusunController;

Route::get('check_slug', function () {
    $slug = SlugService::createSlug(App\Models\News::class, 'slug', request('title'));
    return response()->json(['slug' => $slug]);
});



// Beranda
Route::get('/', [IndexController::class, 'index']);
Route::get('/{slug}/show', [IndexController::class, 'show']);
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
Route::get('/form/pindah-masuk-kab-kec', [FormulirController::class, 'pindah_masuk_kab_kec']);
Route::post('/form/pindah-masuk-kab-kec', [FormulirController::class, 'pindah_masuk_kab_kec_store']);
Route::get('/form/pindah-masuk-kab-prov', [FormulirController::class, 'pindah_masuk_kab_prov']);
Route::post('/form/pindah-masuk-kab-prov', [FormulirController::class, 'pindah_masuk_kab_prov_store']);
Route::get('/form/akte-kelahiran', [FormulirController::class, 'akte_kelahiran']);
Route::post('/form/akte-kelahiran', [FormulirController::class, 'akte_kelahiran_store']);

Route::get('/form/akte-kematian', [FormulirController::class, 'akte_kematian']);
Route::post('/form/akte-kematian', [FormulirController::class, 'akte_kematian_store']);
// Akhir Formulir

// Informasi
/* Berita */
Route::get('/informasi/berita', [InformasiController::class, 'berita']);
Route::get('/{slug}/show', [InformasiController::class, 'beritaShow']);
/* Akhir Berita */
/* Pengumuman */
Route::get('/informasi/pengumuman', [InformasiController::class, 'pengumuman']);
/* Akhir Pengumuman */
/* Kegiatan */
Route::get('/informasi/kegiatan', [InformasiController::class, 'kegiatan']);
/* Akhir Kegiatan */
// Akhir Informasi

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::resource('/admin/berita-gampong', BeritaController::class);
Route::resource('/admin/kegiatan-gampong', KegiatanController::class);
Route::resource('/admin/pengumuman', PengumumanController::class);
Route::resource('/admin/gallery', GalleryController::class);
Route::resource('/admin/organizations', OrganizationController::class);
Route::get('/admin/formulir-masuk', [FormulirMasukController::class, 'index']);

Route::get('admin/formulir-masuk/formulir-permohonan-pindah-wni-dalam-satu-gampong', [FormulirMasukController::class, 'formulirPindahSatuGampong']);
Route::get('admin/formulir-masuk/formulir-permohonan-pindah-wni-dalam-satu-gampong/{id}', [FormulirMasukController::class, 'formulirPindahSatuGampongShow']);
Route::get('admin/formulir-masuk/formulir-permohonan-pindah-wni-dalam-satu-gampong/{id}/delete', [FormulirMasukController::class, 'formulirPindahSatuGampongDestroy']);

Route::get('admin/formulir-masuk/formulir-permohonan-pindah-wni-dalam-satu-kabupaten', [FormulirMasukController::class, 'formulirPindahSatuKabupaten']);
Route::get('admin/formulir-masuk/formulir-permohonan-pindah-wni-dalam-satu-kabupaten/{id}', [FormulirMasukController::class, 'formulirPindahSatuKabupatenShow']);
Route::get('admin/formulir-masuk/formulir-permohonan-pindah-wni-dalam-satu-kabupaten/{id}/delete', [FormulirMasukController::class, 'formulirPindahSatuKabupatenDestroy']);

Route::get('admin/formulir-masuk/surat-keterangan-pindah-masuk-gampong-neuhen-dalam-antar-kabupaten-antar-provinsi', [FormulirMasukController::class, 'formulirAntarKabupatenProvinsi']);
Route::get('admin/formulir-masuk/surat-keterangan-pindah-masuk-gampong-neuhen-dalam-antar-kabupaten-antar-provinsi/{id}', [FormulirMasukController::class, 'formulirAntarKabupatenProvinsiShow']);
Route::get('admin/formulir-masuk/formulir-masuk/surat-keterangan-pindah-masuk-gampong-neuhen-dalam-antar-kabupaten-antar-provinsi/{id}/delete', [FormulirMasukController::class, 'formulirAntarKabupatenProvinsiDestroy']);

Route::get('admin/formulir-masuk/akte-kelahiran', [FormulirMasukController::class, 'akteKelahiran']);
Route::get('admin/formulir-masuk/akte-kelahiran/{id}', [FormulirMasukController::class, 'akteKelahiranShow']);
Route::get('admin/formulir-masuk/akte-kelahiran/{id}/delete', [FormulirMasukController::class, 'akteKelahiranDestroy']);

Route::get('admin/formulir-masuk/akte-kematian', [FormulirMasukController::class, 'akteKematian']);
Route::get('admin/formulir-masuk/akte-kematian/{id}', [FormulirMasukController::class, 'akteKematianShow']);
Route::get('admin/formulir-masuk/akte-kematian/{id}/delete', [FormulirMasukController::class, 'akteKematianDestroy']);

Route::resource('admin/kartu-keluarga', KartuKeluargaController::class);
Route::resource('admin/dusun', DusunController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
