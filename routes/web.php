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

Route::get('/', function () {
    return view('frontend/index');
})->name('index');
Route::get('/', [\App\Http\Controllers\frontend\HomeIndexController::class, 'index'])->name('index');


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

Route::group(['prefix' => 'banner'], function (){
    Route::get('create_banner', [\App\Http\Controllers\Admin\AdminNewsController::class, 'createBannerProcess'])->name('admin.banner.create');
});

Route::get('admin', [\App\Http\Controllers\HomeController::class, 'index'])->name('admin.homepage');