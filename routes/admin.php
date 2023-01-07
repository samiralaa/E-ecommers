<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\indexController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\CategoryController;
Route::get('index',function(){
    return view("dashboard.index");
});
Route::get('index/home',[indexController::class,'index']);
Route::get('setting/index',[SettingController::class,'index'])->name('dashboard.setting.create');

Route::get('setting/create',[SettingController::class,'create'])->name('dashboard.setting.create');
Route::post('setting/store',[SettingController::class,'store'])->name('dashboard.setting.store');
Route::put('setting/update/{id}',[SettingController::class,'update'])->name('dashboard.setting.update');
Route::get('setting/edit/{id}',[SettingController::class,'edit'])->name('dashboard.setting.edit');
// Route Categoryes
Route::get('categoryes/index',[CategoryController::class,'index'])->name('dashboard.categoryes.index');
Route::get('categoryes/create',[CategoryController::class,'create'])->name('dashboard.categoryes.create');
Route::post('categoryes/store',[CategoryController::class,'store'])->name('dashboard.categoryes.store');

