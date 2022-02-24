<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategorController;
use App\Http\Controllers\ArticleController;

Route::get('/article',[ArticleController::class,'index']);
// Route::get('/admin',[ArticleController::class,'index']);
Route::get('/create_article', [ArticleController::class, 'create']);
Route::post('/article/save', [ArticleController::class, 'save']);
Route::get('/article/{id}/edit', [ArticleController::class, 'edit']);
Route::post('/edit_article/{id}', [ArticleController::class, 'update']);
Route::get('/delete_article/{id}', [ArticleController::class, 'delete']);
Route::get('/detais_artic/{id}', [ArticleController::class, 'show']);

?>