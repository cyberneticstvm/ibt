<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/about', 'about')->name('about');
        Route::get('/our-services', 'service')->name('service');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/precious-metals-prices', 'priceChart')->name('price.chart');
        Route::get('/legal-notices', 'legal')->name('legal.notice');
    });
});
