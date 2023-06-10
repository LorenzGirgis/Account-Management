<?php

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

use App\Http\Controllers\AccountController;

Route::resource('accounts', AccountController::class);
Route::get('/', [AccountController::class, 'index'])->name('accounts.index');
Route::get('/create', [AccountController::class, 'create'])->name('accounts.create');
Route::post('/store', [AccountController::class, 'store'])->name('accounts.store');