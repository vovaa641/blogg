<?php

use App\Mail\HellMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PostController;
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

Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get('{post:slug}', [PostController::class, 'show'])->name('view');
Route::get('/category/{category:slug}', [PostController::class, 'byCategory'])->name('by-category');