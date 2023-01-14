<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContatoController::class, 'index']);
Route::get('/about', [SobreController::class, 'index']);
Route::get('/news', [NoticiasController::class, 'index']);

Route::group(['prefix' => '/auth'], function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});

Route::group(['prefix' => '/dashboard', 'middleware' => ['auth']], function(){
    Route::get('/login', [DashboardController::class, 'index'])->name('dashboard');
});
