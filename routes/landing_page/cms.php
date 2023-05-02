<?php

use App\Http\Controllers\LandingPage\CMS\BeritaController;

Route::prefix('cms')->middleware(['auth','petugasAdmin'])->name('cms.')->group(function () {

    Route::get('/', function () {
        return view ('landing_page.cms.index');
    })->name('index');

    Route::post('berita/img/upload', [BeritaController::class, 'CKEditorUpload'])->name('ckeditor.upload');
    Route::resource('berita', BeritaController::class, ['parameters' => ['berita' => 'berita']]);
});