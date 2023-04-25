<?php

Route::get('/', function() {
    return view('landing_page.beranda.index');
});


Route::prefix('informasi')->name('informasi.')->group(function(){
    Route::prefix('berita')->name('berita.')->group(function() {
        Route::get('/', function(){
            return view('landing_page.informasi.berita.index');
        })->name('index');
        Route::get('/detail', function(){
            return view('landing_page.informasi.berita.detail');
        })->name('detail');
    });
});