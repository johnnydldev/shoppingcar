<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {

        Route::get('login', [App\Http\Controllers\Admin\LoginController::class,'showLoginForm'])->name('admin.login');

        Route::post('login', [App\Http\Controllers\Admin\LoginController::class,'login'])->name('admin.login.post');

        Route::get('logout', [App\Http\Controllers\Admin\LoginController::class,'logout'])->name('admin.logout');

        Route::group(['middleware' => ['auth:admin']], function () {
                Route::get('/', function () {
                return view('admin.dashboard.index');
                })->name('admin.dashboard');
               
         });

});

Route::group(['prefix' => 'products'], function () {
        Route::get('/', [App\Http\Controllers\Admin\ProductsController::class,'index'])->name('admin.products.index');
        Route::get('/create', [App\Http\Controllers\Admin\ProductsController::class,'create'])->name('admin.products.create');
        Route::post('/store', [App\Http\Controllers\Admin\ProductsController::class,'store'])->name('admin.products.store');
        Route::get('/{id}/edit', [App\Http\Controllers\Admin\ProductsController::class,'edit'])->name('admin.products.edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\ProductsController::class,'update'])->name('admin.products.update');
        Route::get('/{id}/delete', [App\Http\Controllers\Admin\ProductsController::class,'destroy'])->name('admin.products.destroy');
});

Route::group(['prefix' => 'faq'], function () {
Route::get('/', [App\Http\Controllers\Admin\FAQController::class,'index'])->name('admin.faq.index');
Route::get('/create', [App\Http\Controllers\Admin\FAQController::class,'create'])->name('admin.faq.create');
Route::post('/store', [App\Http\Controllers\Admin\FAQController::class,'store'])->name('admin.faq.store');
Route::get('/{id}/edit', [App\Http\Controllers\Admin\FAQController::class,'edit'])->name('admin.faq.edit');
Route::put('/update/{id}', [App\Http\Controllers\Admin\FAQController::class,'update'])->name('admin.faq.update');
 Route::get('/{id}/delete', [App\Http\Controllers\Admin\FAQController::class,'destroy'])->name('admin.faq.destroy');
});
