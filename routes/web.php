<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SiteController::class, 'home']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/service', [SiteController::class, 'service']);
Route::get('/contact', [SiteController::class, 'sontact']);


/**
 * Admin Routes
 */

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// route name grouping with admin.
Route::name('admin.')->group(function () {
    // middleware grouping
    Route::middleware(['auth'])->group(function () {
        // url prefix grouping
        Route::prefix('admin')->group(function () {
            // admin category routes
            Route::prefix('category')->group(function () {
                Route::get('manage', [HomeController::class, 'getManageCategory'])->name('getManageCategory');
            });
            // admin products routes
            Route::prefix('product')->group(function () {
                Route::get('manage', [HomeController::class, 'getManageProduct'])->name('getManageProduct');
            });
        });
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
