<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\DishController;
Route::get('/', [PageController::class, 'welcome']);
Route::get('/menu', [PageController::class, 'menu']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/register', [PageController::class, 'register']);
Route::get('/autorization', [PageController::class, 'autorization']);
Route::get('/contacts', [PageController::class, 'contacts']);
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('/menu/{dish}', [MenuController::class, 'show'])->name('menu.show');
Route::get('/dish/{id}', [DishController::class, 'show'])->name('dish.show');
