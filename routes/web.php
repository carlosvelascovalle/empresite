<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\SitemapController;


Route::get('/', [HomeController::class, 'index']);

Route::controller(EmpresasController::class)->group(function () {
    Route::get(
        '/empresas',
        'index'
    );
    Route::get('/empresa/{slug}', 'show');
});
Route::get('/sitemap.xml', [SitemapController::class, 'index']);
