<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminEltController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/register', function () {
    return view('register');
})->middleware(['auth']);
require __DIR__.'/auth.php';
Route::fallback(function () {
    return "not match router";
});
Route::get('/admin',[AdminEltController::class,'admin']);

