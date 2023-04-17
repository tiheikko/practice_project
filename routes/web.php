<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteViewController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\NavController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ExcursionController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProcessesController;
use App\Http\Controllers\VideoBlockController;
use App\Http\Controllers\WhatWeDoController;


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryImagesController;
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


// MAIN PAGE
Route::get('/main', [SiteViewController::class, 'index'])->name('main.index');



// ADMIN PAGE
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/edit', [AdminController::class, 'edit'])->name('admin.edit');



// NAVIGATION EDIT AND UPDATE
Route::get('/admin/nav/edit', [NavController::class, 'edit'])->name('nav.edit');
Route::patch('/admin/nav/update', [NavController::class, 'update'])->name('nav.update');


// SLIDER EDIT AND UPDATE
Route::get('/admin/slider/edit', [SliderController::class, 'edit'])->name('slider.edit');
Route::patch('/admin/slider/update', [SliderController::class, 'update'])->name('slider.update');


// WHAT WE DO BLOCK EDIT AND UPDATE
Route::get('/admin/what_we_do/edit', [WhatWeDoController::class, 'edit'])->name('what_we_do.edit');
Route::patch('/admin/what_we_do/update', [WhatWeDoController::class, 'update'])->name('what_we_do.update');


// EXCURSION BLOCK EDIT AND UPDATE
Route::get('/admin/excursion/edit', [ExcursionController::class, 'edit'])->name('excursion.edit');
Route::patch('/admin/excursion/update', [ExcursionController::class, 'update'])->name('excursion.update');


// VIDEO BLOCK EDIT AND UPDATE
Route::get('/admin/video_block/edit', [VideoBlockController::class, 'edit'])->name('video_block.edit');
Route::patch('/admin/video_block/update', [VideoBlockController::class, 'update'])->name('video_block.update');


// GALLERY EDIT AND UPDATE
Route::get('/admin/gallery/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
Route::patch('/admin/gallery/update', [GalleryController::class, 'update'])->name('gallery.update');



// GALLERY PICTURES EDIT AND UPDATE
Route::resource('gallery_images', GalleryImagesController::class);



// NEWS BLOCK EDIT AND UPDATE
Route::get('/admin/news/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::patch('/admin/news/update', [NewsController::class, 'update'])->name('news.update');


// COMPANY BLOCK EDIT AND UPDATE
Route::get('/admin/company/edit', [CompanyController::class, 'edit'])->name('company.edit');
Route::patch('/admin/company/update', [CompanyController::class, 'update'])->name('company.update');



// PROCESSES BLOCK EDIT AND UPDATE
Route::get('/admin/processes/edit', [ProcessesController::class, 'edit'])->name('processes.edit');
Route::patch('/admin/processes/update', [ProcessesController::class, 'update'])->name('processes.update');


// FOOTER EDIT AND UPDATE
Route::get('/admin/footer/edit', [FooterController::class, 'edit'])->name('footer.edit');
Route::patch('/admin/footer/update', [FooterController::class, 'update'])->name('footer.update');