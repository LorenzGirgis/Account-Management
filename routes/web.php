<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AccountController::class, 'index'])->name('index');
Route::get('/create', [AccountController::class, 'create'])->name('create');
Route::post('/store', [AccountController::class, 'store'])->name('store');
Route::get('/{account}/edit', [AccountController::class, 'edit'])->name('edit');
Route::put('/{account}', [AccountController::class, 'update'])->name('update');
Route::delete('/{account}', [AccountController::class, 'destroy'])->name('destroy');
Route::get('/{account}', [AccountController::class, 'show'])->name('show');
Route::get('/valorant-stats', [ValorantController::class, 'valorant-stats'])->name('valorant-stats');
