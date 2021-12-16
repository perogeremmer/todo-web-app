<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelloController;
use App\Http\Controllers\TodoController;

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

Route::get('/hello', [HelloController::class, 'index']);
Route::get('/todo', [TodoController::class, 'index'])->name('index');
Route::get('/todo/create', [TodoController::class, 'create'])->name('create');
Route::post('/todo/create', [TodoController::class, 'store'])->name('store');
Route::get('/todo/{id}', [TodoController::class, 'edit'])->name('edit');
Route::get('/todo/{id}/done', [TodoController::class, 'done'])->name('done');
Route::put('/todo/{id}', [TodoController::class, 'update'])->name('update');
Route::delete('/todo/{id}', [TodoController::class, 'destroy'])->name('destroy');
