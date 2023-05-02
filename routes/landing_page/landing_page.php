<?php

use App\Http\Controllers\LandingPage\BeritaController;

Route::get('/', function() {
    return view('landing_page.beranda.index');
});


Route::prefix('informasi')->name('informasi.')->group(function(){
    Route::controller(BeritaController::class)->prefix('berita')->name('berita.')->group(function() {
        Route::get('/','index')->name('index');
        Route::get('{slug}','show')->name('detail');
        Route::post('search','search')->name('search');
    });
});