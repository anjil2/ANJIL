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
Route::get('/contact', [SiteController::class, 'contact']);
/**
 *
 * Admin Routes
 */
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
// route name grouping with admin.
Route::name('admin.')->group(function () {
    // middleware grouping
    Route::middleware(['auth'])->group(function () {
        // url prefix grouping
        Route::prefix('admin')->group(function () { Route::get('add', [HomeController::class, 'getAddCart'])->name('getAddCart');
            // admin category routes
            Route::prefix('category')->group(function () {
                Route::get('manage', [HomeController::class, 'getManageCategory'])->name('getManageCategory');
                Route::post('add', [HomeController::class, 'postAddCategory'])->name('postAddCategory');
                Route::get('edit/{slug}', [HomeController::class, 'getEditCategory'])->name('getEditCategory');
                Route::post('edit/{slug}', [HomeController::class, 'postEditCategory'])->name('postEditCategory');
                Route::get('delete/{slug}', [HomeController::class, 'getDeleteCategory'])->name('getDeleteCategory');
            });
            // admin products routes
            Route::prefix('product')->group(function () {
                Route::get('manage', [HomeController::class, 'getManageProduct'])->name('getManageProduct');
                Route::post('add', [HomeController::class, 'postAddProduct'])->name('postAddProduct');
                Route::get('edit/{slug}', [HomeController::class, 'getEditProduct'])->name('getEditProduct');
                Route::post('edit/{slug}', [HomeController::class, 'postEditProduct'])->name('postEditProduct');
                Route::get('delete/{slug}', [HomeController::class, 'getDeleteProduct'])->name('getDeleteProduct');
            });
        });
    });
});
// Route::get('admin/product/manage', [HomeController::class, 'getManageProduct'])->name('admin.getManageProduct')->middleware('auth');
Route::get('add', [SiteController::class, 'getAddCart'])->name('site.getAddCart');
Route::get('addprocced', [SiteController::class, 'getAddCartprocced'])->name('site.getAddCartprocced');