<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BbsController;

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

Route::get('/', [BbsController::class, 'index'])->name('index');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'save_advt'])->name('save_advt');

// Маршруты по добовлению и удалению, обновлению.
Route::get('/home/add', [App\Http\Controllers\HomeController::class, 'add_advt'])->name('add_advt');
Route::get('/home/{bb}', [App\Http\Controllers\HomeController::class, 'edit_advt'])->name('edit_advt');
Route::patch('/home/{bb}', [App\Http\Controllers\HomeController::class, 'update_advt'])->name('edit_advt');
Route::get('/home/{bb}/delete', [App\Http\Controllers\HomeController::class, 'delete_advt'])->name('delete_advt');
Route::delete('/home/{bb}', [App\Http\Controllers\HomeController::class, 'destroy_advt'])->name('destroy_advt');

// Детальная информация о записи.
Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');
