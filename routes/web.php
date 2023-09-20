<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\Sitecontroller;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\TopicController;
use App\Http\Controllers\backend\OrderController;








 

Route::get('/', [Sitecontroller::class, 'index'])->name('site.home');


Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    //brand
    Route::resource('brand', BrandController::class);
    Route::get('brand_trash',[BrandController::class,'trash'])->name('brand.trash');
    Route::get('brand/status/{brand}',[BrandController::class,'status'])->name('brand.status');
    Route::get('brand/delete/{brand}',[BrandController::class,'delete'])->name('brand.delete');
    Route::get('brand/restore/{brand}',[BrandController::class,'restore'])->name('brand.restore');
    Route::get('brand/destroy/{brand}',[BrandController::class,'destroy'])->name('brand.destroy');
   //category
    Route::resource('category', CategoryController::class);
    Route::get('category_trash',[CategoryController::class,'trash'])->name('category.trash');
    
   //product
    Route:: resource('product',ProductController::class);
    Route:: resource('contact',ContactController::class);
    Route:: resource('menu',MenuController::class);
    Route:: resource('post',PostController::class);
    Route:: resource('slider',SliderController::class);
    Route:: resource('topic',TopicController::class);
    Route:: resource('order',OrderController::class);

    


   

});