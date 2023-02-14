<?php

use App\Http\Controllers\Admin\ComicController as ComicController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Guest\PageController as GuestPageController;
use Illuminate\Support\Facades\Route;



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

Route::get('/', [GuestPageController::class, 'home'])->name('guest.home');

Route::prefix('admin')->name('admin.comics.')->group(function () {
    Route::get('home', [AdminPageController::class, 'home'])->name('home');
    Route::get('/', [ComicController::class, 'index'])->name('index');
    Route::get('/create', [ComicController::class, 'create'])->name('create');
    Route::get('/{id}', [ComicController::class, 'show'])->name('show');
    Route::post('/store', [ComicController::class, 'store'])->name('store');
});
