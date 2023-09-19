<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('admin.homepage');

//News
Route::group(['prefix' => 'news'], function () {
Route::get('list', [\App\Http\Controllers\Admin\AdminNewsController::class, 'index'])->name('admin.news.list');
Route::get('edit/{id}',[\App\Http\Controllers\Admin\AdminNewsController::class, 'edit'])->name('admin.news.edit');
Route::put('update/{id}',[\App\Http\Controllers\Admin\AdminNewsController::class, 'update'])->name('admin.news.update');
Route::get('create',[\App\Http\Controllers\Admin\AdminNewsController::class, 'createProcess'])->name('admin.news.createProcess');
Route::post('create',[\App\Http\Controllers\Admin\AdminNewsController::class, 'create'])->name('admin.news.create');
Route::delete('delete/{id}',[\App\Http\Controllers\Admin\AdminNewsController::class, 'delete'])->name('admin.news.delete');
});

//News
Route::group(['prefix' => 'pages'], function () {
    Route::get('list', [\App\Http\Controllers\Admin\PagesController::class, 'index'])->name('admin.pages.list');
    Route::get('edit/{id}',[\App\Http\Controllers\Admin\PagesController::class, 'edit'])->name('admin.pages.edit');
    Route::put('update/{id}',[\App\Http\Controllers\Admin\PagesController::class, 'update'])->name('admin.pages.update');
    Route::get('create',[\App\Http\Controllers\Admin\PagesController::class, 'createProcess'])->name('admin.pages.createProcess');
    Route::post('create',[\App\Http\Controllers\Admin\PagesController::class, 'create'])->name('admin.pages.create');
    Route::delete('delete/{id}',[\App\Http\Controllers\Admin\PagesController::class, 'delete'])->name('admin.pages.delete');
});

//Profile
Route::group(['prefix' => 'configs'], function (){
    Route::get('/', [\App\Http\Controllers\Admin\ConfigsController::class, 'index'])->name('admin.configs.index');
    Route::post('/', [\App\Http\Controllers\Admin\ConfigsController::class, 'create'])->name('admin.configs.create');
});

//Menu
Route::group(['prefix' => 'menus'], function (){
    Route::get('/', [\App\Http\Controllers\Admin\AdminMenuController::class, 'index'])->name('admin.menu.list');
    Route::get('create', [\App\Http\Controllers\Admin\AdminMenuController::class, 'processCreate'])->name('admin.menu.processCreate');
    Route::post('create', [\App\Http\Controllers\Admin\AdminMenuController::class, 'create'])->name('admin.menu.create');
    Route::get('edit/{id}', [\App\Http\Controllers\Admin\AdminMenuController::class, 'edit'])->name('admin.menu.edit');
    Route::put('update/{id}', [\App\Http\Controllers\Admin\AdminMenuController::class, 'update'])->name('admin.menu.update');
    Route::delete('delete/{id}',[\App\Http\Controllers\Admin\AdminMenuController::class, 'delete'])->name('admin.menu.delete');

});

//Category
Route::group(['prefix' => 'category'], function (){
    Route::get('/', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category.list');
    Route::get('create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('create', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('admin.category.delete');

});

//Banner
Route::group(['prefix' => 'banner'], function () {
    Route::get('create_banner', [\App\Http\Controllers\Admin\AdminBannersController::class, 'createBannerProcess'])->name('admin.banner.createBannerProcess');
    Route::post('create_banner', [\App\Http\Controllers\Admin\AdminBannersController::class, 'create'])->name('admin.banner.create');
    Route::get('list_banner', [\App\Http\Controllers\Admin\AdminBannersController::class, 'showListBanner'])->name('admin.banner.list');
    Route::get('bannerImage/{id}/edit', [\App\Http\Controllers\Admin\AdminBannersController::class, 'bannerEdit'])->name('admin.banner.edit');
    Route::put('bannerImage/{id}', [\App\Http\Controllers\Admin\AdminBannersController::class, 'bannerUpdate'])->name('update.banner');
    Route::delete('delete_banner/{id}', [\App\Http\Controllers\Admin\AdminBannersController::class, 'deleteBanner'])->name('delete.banner');
});