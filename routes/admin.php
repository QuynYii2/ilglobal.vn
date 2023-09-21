<?php

use App\Http\Controllers\Admin\AdminBannersController;
use App\Http\Controllers\Admin\AdminMenuController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\AdminPartnerController;
use App\Http\Controllers\Admin\AdminTrackController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ConfigsController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('admin.homepage');

//News
Route::group(['prefix' => 'news'], function () {
    Route::get('list', [AdminNewsController::class, 'index'])->name('admin.news.list');
    Route::get('edit/{id}', [AdminNewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('update/{id}', [AdminNewsController::class, 'update'])->name('admin.news.update');
    Route::get('create', [AdminNewsController::class, 'createProcess'])->name('admin.news.createProcess');
    Route::post('create', [AdminNewsController::class, 'create'])->name('admin.news.create');
    Route::delete('delete/{id}', [AdminNewsController::class, 'delete'])->name('admin.news.delete');
});

//News
Route::group(['prefix' => 'pages'], function () {
    Route::get('list', [PagesController::class, 'index'])->name('admin.pages.list');
    Route::get('edit/{id}', [PagesController::class, 'edit'])->name('admin.pages.edit');
    Route::put('update/{id}', [PagesController::class, 'update'])->name('admin.pages.update');
    Route::get('create', [PagesController::class, 'createProcess'])->name('admin.pages.createProcess');
    Route::post('create', [PagesController::class, 'create'])->name('admin.pages.create');
    Route::delete('delete/{id}', [PagesController::class, 'delete'])->name('admin.pages.delete');
});

//Profile
Route::group(['prefix' => 'configs'], function () {
    Route::get('/', [ConfigsController::class, 'index'])->name('admin.configs.index');
    Route::post('/', [ConfigsController::class, 'create'])->name('admin.configs.create');
});

//Menu
Route::group(['prefix' => 'menus'], function () {
    Route::get('/', [AdminMenuController::class, 'index'])->name('admin.menu.list');
    Route::get('create', [AdminMenuController::class, 'processCreate'])->name('admin.menu.processCreate');
    Route::post('create', [AdminMenuController::class, 'create'])->name('admin.menu.create');
    Route::get('edit/{id}', [AdminMenuController::class, 'edit'])->name('admin.menu.edit');
    Route::put('update/{id}', [AdminMenuController::class, 'update'])->name('admin.menu.update');
    Route::delete('delete/{id}', [AdminMenuController::class, 'delete'])->name('admin.menu.delete');

});

//Category
Route::group(['prefix' => 'category'], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('admin.category.list');
    Route::get('create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('create', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');

});

//Category
Route::group(['prefix' => 'track'], function () {
    Route::get('/', [AdminTrackController::class, 'index'])->name('admin.track.list');
    Route::get('create', [AdminTrackController::class, 'create'])->name('admin.track.create');
    Route::post('create', [AdminTrackController::class, 'store'])->name('admin.track.store');
    Route::get('edit/{id}', [AdminTrackController::class, 'edit'])->name('admin.track.edit');
    Route::put('update/{id}', [AdminTrackController::class, 'update'])->name('admin.track.update');
    Route::delete('delete/{id}', [AdminTrackController::class, 'delete'])->name('admin.track.delete');

});

//Banner
Route::group(['prefix' => 'banner'], function () {
    Route::get('create_banner', [AdminBannersController::class, 'createBannerProcess'])->name('admin.banner.createBannerProcess');
    Route::post('create_banner', [AdminBannersController::class, 'create'])->name('admin.banner.create');
    Route::get('list_banner', [AdminBannersController::class, 'showListBanner'])->name('admin.banner.list');
    Route::get('bannerImage/{id}/edit', [AdminBannersController::class, 'bannerEdit'])->name('admin.banner.edit');
    Route::put('bannerImage/{id}', [AdminBannersController::class, 'bannerUpdate'])->name('update.banner');
    Route::delete('delete_banner/{id}', [AdminBannersController::class, 'deleteBanner'])->name('delete.banner');
});

//Partner
Route::group(['prefix' => 'partner'], function () {
    Route::get('list', [AdminPartnerController::class, 'index'])->name('admin.partner.list');
    Route::get('create', [AdminPartnerController::class, 'processCreate'])->name('admin.partner.processCreate');
    Route::post('create', [AdminPartnerController::class, 'create'])->name('admin.partner.create');
    Route::get('detail/{id}', [AdminPartnerController::class, 'detail'])->name('admin.partner.detail');
    Route::put('update/{id}', [AdminPartnerController::class, 'update'])->name('admin.partner.update');
    Route::delete('delete/{id}', [AdminPartnerController::class, 'delete'])->name('admin.partner.delete');
});