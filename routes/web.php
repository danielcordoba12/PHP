<?php

use App\Http\Controllers\PersonasController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[UsersController::class, 'index'])->name('users.index');
Route::get('/create',[UsersController::class, 'create'])->name('users.create');
Route::post('/store',[UsersController::class, 'store'])->name('Users.store');
Route::get('/edit/{id}',[UsersController::class, 'edit'])->name('Users.edit');
Route::put('/update/{id}',[UsersController::class, 'update'])->name('Users.update');
Route::get('/show/{id}',[UsersController::class, 'show'])->name('Users.show');
Route::delete('/destroy/{id}',[UsersController::class, 'destroy'])->name('Users.destroy');
Route::get('/reporte/{id}',[UsersController::class, 'report'])->name('Users.report');








