<?php

use App\Http\Controllers\Admin\ComicController as ComicController;
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

Route::get('/', [ComicController::class, 'index'])->name('index');
Route::prefix('admin')->name('admin.comics.')->group(function () {
    Route::get('/', [ComicController::class, 'index'])->name('index');
    Route::get('/create', [ComicController::class, 'create'])->name('create');
    Route::get('/{id}', [ComicController::class, 'show'])->name('show');
    Route::post('/', [ComicController::class, 'store'])->name('store');
});
// Route::get('/', [ComicController::class, 'index'])->name('comics.index');
// Route::get('/create', [ComicController::class, 'create'])->name('comics.create');
// Route::get('/{id}', [ComicController::class, 'show'])->name('comics.show');
// Route::post('/', [ComicController::class, 'store'])->name('comics.store');
