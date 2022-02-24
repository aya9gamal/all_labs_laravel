<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategorController;
use App\Http\Controllers\ArticleController;

Route::get('/cate',[CategorController::class,'index'])->middleware(['auth','is_admin']);
Route::get('/create', [CategorController::class, 'create'])->name('category.create')->middleware(['is_admin','age']);
Route::post('/cats/save', [CategorController::class, 'save'])->name('category.save');
Route::get('/delete_cate/{id}', [CategorController::class, 'delete']);
Route::get('/cate/{id}/edit', [CategorController::class, 'edit']);
Route::post('/edit/{id}', [CategorController::class, 'update']);
Route::get('/detais_cate/{id}', [CategorController::class, 'show']);
?>