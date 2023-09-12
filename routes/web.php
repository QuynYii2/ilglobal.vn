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
});


Route::get('/admin', function () {
    return view('admin.layouts.master');
});

// Auth
Route::prefix('auth')->group(function () {
    Route::get('login', [\App\Http\Controllers\AuthController::class, 'loginProcess'])->name('process.login');
    Route::post('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');
    Route::get('register', [\App\Http\Controllers\AuthController::class, 'processRegister'])->name('process.register');
    Route::post('register', [\App\Http\Controllers\AuthController::class, 'register'])->name('auth.register');
    Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');
});


//Admin
Route::group(['prefix' => 'news'], function () {
   Route::get('list', [\App\Http\Controllers\Admin\AdminNewsController::class, 'index'])->name('admin.news.list');
   Route::get('edit/{id}',[\App\Http\Controllers\Admin\AdminNewsController::class, 'edit'])->name('admin.news.edit');
   Route::put('update/{id}',[\App\Http\Controllers\Admin\AdminNewsController::class, 'update'])->name('admin.news.update');
   Route::get('create',[\App\Http\Controllers\Admin\AdminNewsController::class, 'createProcess'])->name('admin.news.createProcess');
   Route::post('create',[\App\Http\Controllers\Admin\AdminNewsController::class, 'create'])->name('admin.news.create');
   Route::delete('delete/{id}',[\App\Http\Controllers\Admin\AdminNewsController::class, 'delete'])->name('admin.news.delete');
});

Route::group(['prefix' => 'banner'], function (){
    Route::get('create_banner', [\App\Http\Controllers\Admin\AdminNewsController::class, 'createBannerProcess'])->name('admin.banner.create');
});

Route::get('admin', [\App\Http\Controllers\AdminHomeController::class, 'index'])->name('admin.homepage');