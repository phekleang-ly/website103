<?php
use App\Http\Controllers\BannerController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\postsController;

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();

// Route::get('login',[HomeController::class,'login'])->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('role-index',[RoleController::class,'index'])->name('role.index');
Route::get('role-create',[RoleController::class,'create'])->name('role.create');
Route::post('role-store',[RoleController::class,'store'])->name('role.store');
Route::get('role-edit/{id}',[RoleController::class,'edit'])->name('role.edit');
Route::put('role-update/{id}',[RoleController::class,'update'])->name('role.update');
Route::get('role-delete/{id}',[RoleController::class,'destroy'])->name('role.delete');

Route::get('banner-index',[BannerController::class,'index'])->name('banner.index');
Route::get('banner-create',[BannerController::class,'create'])->name('banner.create');
Route::post('banner-store',[BannerController::class,'store'])->name('banner.store');
Route::get('banner-edit/{id}',[BannerController::class,'edit'])->name('banner.edit');
Route::put('banner-update/{id}',[BannerController::class,'update'])->name('banner.update');
Route::get('banner-delete/{id}',[BannerController::class,'destroy'])->name('banner.delete');

Route::get('post-index',[postsController::class,'index'])->name('post.index');
Route::get('post-create',[postsController::class,'create'])->name('post.create');
Route::post('post-store',[postsController::class,'store'])->name('post.store');
Route::get('post-edit/{id}',[postsController::class,'edit'])->name('post.edit');
Route::put('post-update/{id}',[postsController::class,'update'])->name('post.update');
Route::get('post-delete/{id}',[postsController::class,'destroy'])->name('post.delete');


