<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('admin.homepage');
    //Admin
    Route::group(['prefix' => 'news'], function () {
    Route::get('list', [\App\Http\Controllers\Admin\AdminNewsController::class, 'index'])->name('admin.news.list');
    Route::get('edit/{id}',[\App\Http\Controllers\Admin\AdminNewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('update/{id}',[\App\Http\Controllers\Admin\AdminNewsController::class, 'update'])->name('admin.news.update');
    Route::get('create',[\App\Http\Controllers\Admin\AdminNewsController::class, 'createProcess'])->name('admin.news.createProcess');
    Route::post('create',[\App\Http\Controllers\Admin\AdminNewsController::class, 'create'])->name('admin.news.create');
    Route::delete('delete/{id}',[\App\Http\Controllers\Admin\AdminNewsController::class, 'delete'])->name('admin.news.delete');
});

Route::group(['prefix' => 'configs'], function (){
    Route::get('configs', [\App\Http\Controllers\Admin\ConfigsController::class, 'index'])->name('admin.configs.index');
    Route::post('createLogo', [\App\Http\Controllers\Admin\ConfigsController::class, 'create'])->name('admin.configs.create');
});

Route::group(['prefix' => 'menus'], function (){
    Route::get('', [\App\Http\Controllers\Admin\AdminMenuController::class, 'index'])->name('admin.menu.list');
    Route::get('create', [\App\Http\Controllers\Admin\AdminMenuController::class, 'processCreate'])->name('admin.menu.processCreate');
    Route::post('create', [\App\Http\Controllers\Admin\AdminMenuController::class, 'create'])->name('admin.menu.create');
    Route::get('edit/{id}', [\App\Http\Controllers\Admin\AdminMenuController::class, 'edit'])->name('admin.menu.edit');
    Route::put('update/{id}', [\App\Http\Controllers\Admin\AdminMenuController::class, 'update'])->name('admin.menu.update');
    Route::delete('delete/{id}',[\App\Http\Controllers\Admin\AdminMenuController::class, 'delete'])->name('admin.menu.delete');

});