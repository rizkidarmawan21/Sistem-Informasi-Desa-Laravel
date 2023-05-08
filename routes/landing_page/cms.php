<?php

use App\Http\Controllers\LandingPage\CMS\BeritaController;
use App\Http\Controllers\LandingPage\CMS\JabatanPegawaiController;
use App\Http\Controllers\LandingPage\CMS\PegawaiController;

Route::prefix('cms')->middleware(['auth', 'petugasAdmin'])->name('cms.')->group(function () {

    Route::get('/', function () {
        return view('landing_page.cms.index');
    })->name('index');

    Route::post('berita/img/upload', [BeritaController::class, 'CKEditorUpload'])->name('ckeditor.upload');
    Route::resource('berita', BeritaController::class, ['parameters' => ['berita' => 'berita']]);
    Route::resource('pegawai', PegawaiController::class);
    Route::resource('jabatan', JabatanPegawaiController::class);
});
