<?php

use App\Http\Controllers\AuthController;
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
Route::get('/lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
})->name('language');

Route::get('/', function () {
    return view('frontend/index');
})->name('index');
Route::get('/', [\App\Http\Controllers\frontend\HomeIndexController::class, 'index'])->name('index');
Route::get('about', [\App\Http\Controllers\frontend\AboutController::class, 'index'])->name('about');
//Route::get('pricing', [\App\Http\Controllers\frontend\PricingController::class, 'index'])->name('pricing');
Route::get('contact', [\App\Http\Controllers\frontend\ContactController::class, 'index'])->name('contact');
Route::get('services', [\App\Http\Controllers\frontend\ServicesController::class, 'index'])->name('services');
Route::get('service-details/{id}', [\App\Http\Controllers\frontend\ServiceDetailsController::class, 'index'])->name('service-details');


// Auth
Route::prefix('auth')->group(function () {
    Route::get('login', [\App\Http\Controllers\AuthController::class, 'loginProcess'])->name('process.login');
    Route::post('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');
    Route::get('register', [\App\Http\Controllers\AuthController::class, 'processRegister'])->name('process.register');
    Route::post('register', [\App\Http\Controllers\AuthController::class, 'register'])->name('auth.register');
    Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');
});


//Admin
Route::group(['prefix' => 'admin', 'middleware' => 'role.admin'], function () {
    require_once __DIR__ . '/admin.php';
});

Route::group(['prefix' => 'banner'], function () {
    Route::get('create_banner', [\App\Http\Controllers\Admin\AdminBannersController::class, 'createBannerProcess'])->name('admin.banner.createBannerProcess');
    Route::post('create_banner', [\App\Http\Controllers\Admin\AdminBannersController::class, 'create'])->name('admin.banner.create');
    Route::get('list_banner', [\App\Http\Controllers\Admin\AdminBannersController::class, 'showListBanner'])->name('admin.banner.list');
    Route::get('bannerImage/{id}/edit', [\App\Http\Controllers\Admin\AdminBannersController::class, 'bannerEdit'])->name('admin.banner.edit');
    Route::put('bannerImage/{id}', [\App\Http\Controllers\Admin\AdminBannersController::class, 'bannerUpdate'])->name('update.banner');
    Route::delete('delete_banner/{id}', [\App\Http\Controllers\Admin\AdminBannersController::class, 'deleteBanner'])->name('delete.banner');
});

Route::get('admin', [\App\Http\Controllers\HomeController::class, 'index'])->name('admin.homepage');