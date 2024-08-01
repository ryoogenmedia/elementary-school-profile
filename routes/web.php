<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function(){
    Route::get('/beranda', [DashboardController::class,'index'])->name('home.backend');
    Route::post('/logout', [AuthenticationController::class,'logout'])->name('logout');

    Route::prefix('/profil')->name('profile.')->controller(ProfileController::class)->group(function(){
        Route::get('/', 'index')->name('index');
        Route::put('/{id}', 'update')->name('update');
    });

    Route::prefix('/berita')->name('news.')->controller(NewsController::class)->group(function(){
        Route::get('/', 'index')->name('index'); // Halaman index
        Route::get('/tambah', 'create')->name('create'); // Halaman create
        Route::post('/', 'store')->name('store'); // Post create
        Route::get('/sunting/{id}', 'edit')->name('edit'); // Halaman edit
        Route::put('/{id}', 'update')->name('update'); // Update berita
        Route::delete('/{id}', 'destroy')->name('delete'); // Hapus berita
    });
});

Route::middleware('guest')->group(function(){
    Route::get('/login', [AuthenticationController::class,'index'])->name('view.login');
    Route::post('/login', [AuthenticationController::class,'login'])->name('login');

    Route::get('/', [LandingPageController::class,'index'])->name('home.frontend');
});

