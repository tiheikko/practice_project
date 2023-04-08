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
Route::get('/admin/edit_block1', [AdminController::class, 'edit_block1'])->name('admin.edit_block1');
Route::get('/admin/edit_block2', [AdminController::class, 'edit_block2'])->name('admin.edit_block2');
Route::get('/admin/edit_block3', [AdminController::class, 'edit_block3'])->name('admin.edit_block3');
Route::get('/admin/edit_block4', [AdminController::class, 'edit_block4'])->name('admin.edit_block4');
Route::get('/admin/edit_gallery', [AdminController::class, 'edit_gallery'])->name('admin.edit_gallery');
Route::get('/admin/edit_news', [AdminController::class, 'edit_news'])->name('admin.edit_news');
Route::get('/admin/edit_company', [AdminController::class, 'edit_company'])->name('admin.edit_company');
Route::get('/admin/edit_processes', [AdminController::class, 'edit_processes'])->name('admin.edit_processes');
Route::get('/admin/edit_footer', [AdminController::class, 'edit_footer'])->name('admin.edit_footer');


Route::patch('/admin/update_nav', [AdminController::class, 'update_nav'])->name('admin.update_nav');
Route::patch('/admin/update_block1', [AdminController::class, 'update_block1'])->name('admin.update_block1');
Route::patch('/admin/update_block2', [AdminController::class, 'update_block2'])->name('admin.update_block2');
Route::patch('/admin/update_block3', [AdminController::class, 'update_block3'])->name('admin.update_block3');
Route::patch('/admin/update_block4', [AdminController::class, 'update_block4'])->name('admin.update_block4');
Route::patch('/admin/update_gallery', [AdminController::class, 'update_gallery'])->name('admin.update_gallery');
Route::patch('/admin/update_news', [AdminController::class, 'update_news'])->name('admin.update_news');
Route::patch('/admin/update_company', [AdminController::class, 'update_company'])->name('admin.update_company');
Route::patch('/admin/update_processes', [AdminController::class, 'update_processes'])->name('admin.update_processes');
Route::patch('/admin/update_footer', [AdminController::class, 'update_footer'])->name('admin.update_footer');

Route::get('/main', [PageController::class, 'index'])->name('main.index');
