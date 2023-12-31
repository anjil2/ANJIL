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
Route::get('product/{slug}', [SiteController::class, 'getProductDetails'])->name('getProductDetails');
Route::get('/category/{slug}/products', [SiteController::class, 'getProductsByCategory'])->name('getProductsByCategory');
Route::post('/cart/{slug}/add', [SiteController::class, 'postAddToCart'])->name('postAddToCart');
Route::get('/cart/{slug}/direct', [SiteController::class, 'addToCartDirect'])->name('addToCartDirect');
Route::get('/cart/{id}/delete', [SiteController::class, 'getDeleteCart'])->name('getDeleteCart');
Route::post('/cart/{id}/update', [SiteController::class, 'getUpdateCart'])->name('getUpdateCart');
Route::get('/checkout', [SiteController::class, 'getCheckout'])->name('getCheckout');
Route::post('/checkout', [SiteController::class, 'postCheckout'])->name('postCheckout');

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
            Route::get('add', [HomeController::class, 'getAddCart'])->name('getAddCart');
            Route::post('manage', [HomeController::class, 'postManageOrder'])->name('postManageOrder');
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
             // admin order routes
             Route::prefix('order')->group(function () {
                Route::get('manage', [HomeController::class, 'getManageOrder'])->name('getManageOrder');
                Route::get('payment/complete/{id}', [HomeController::class, 'makePaymentComplete'])->name('makePaymentComplete');
            });
        });
    });
});
// Route::get('admin/product/manage', [HomeController::class, 'getManageProduct'])->name('admin.getManageProduct')->middleware('auth');
Route::get('add', [SiteController::class, 'getAddCart'])->name('site.getAddCart');
Route::get('addprocced/{code}', [SiteController::class, 'getAddCartprocced'])->name('site.getAddCartprocced');