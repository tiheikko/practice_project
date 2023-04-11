<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;

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
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('/admin/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::get('/admin/edit_nav', [AdminController::class, 'edit_nav'])->name('admin.edit_nav');
Route::get('/admin/edit_slider', [AdminController::class, 'edit_slider'])->name('admin.edit_slider');
Route::get('/admin/edit_what_we_do', [AdminController::class, 'edit_what_we_do'])->name('admin.edit_what_we_do');
Route::get('/admin/edit_excursion', [AdminController::class, 'edit_excursion'])->name('admin.edit_excursion');
Route::get('/admin/edit_video_block', [AdminController::class, 'edit_video_block'])->name('admin.edit_video_block');
Route::get('/admin/edit_gallery', [AdminController::class, 'edit_gallery'])->name('admin.edit_gallery');
Route::get('/admin/edit_news', [AdminController::class, 'edit_news'])->name('admin.edit_news');
Route::get('/admin/edit_company', [AdminController::class, 'edit_company'])->name('admin.edit_company');
Route::get('/admin/edit_processes', [AdminController::class, 'edit_processes'])->name('admin.edit_processes');
Route::get('/admin/edit_footer', [AdminController::class, 'edit_footer'])->name('admin.edit_footer');


Route::patch('/admin/update_nav', [AdminController::class, 'update_nav'])->name('admin.update_nav');
Route::patch('/admin/update_slider', [AdminController::class, 'update_slider'])->name('admin.update_slider');
Route::patch('/admin/update_what_we_do', [AdminController::class, 'update_what_we_do'])->name('admin.update_what_we_do');
Route::patch('/admin/update_excursion', [AdminController::class, 'update_excursion'])->name('admin.update_excursion');
Route::patch('/admin/update_video_block', [AdminController::class, 'update_block4'])->name('admin.update_video_block');
Route::patch('/admin/update_gallery', [AdminController::class, 'update_gallery'])->name('admin.update_gallery');
Route::patch('/admin/update_news', [AdminController::class, 'update_news'])->name('admin.update_news');
Route::patch('/admin/update_company', [AdminController::class, 'update_company'])->name('admin.update_company');
Route::patch('/admin/update_processes', [AdminController::class, 'update_processes'])->name('admin.update_processes');
Route::patch('/admin/update_footer', [AdminController::class, 'update_footer'])->name('admin.update_footer');

Route::get('/main', [PageController::class, 'index'])->name('main.index');
