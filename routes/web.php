<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\BlogController;


Route::get('/',[FrontController::class,'index'])->name('landing');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/add-blog', [BlogController::class, 'add'])->name('add-blog');
    Route::post('/create-blog', [BlogController::class, 'create'])->name('create-blog');

    Route::get('/manage-blog', [BlogController::class, 'manage'])->name('manage-blog');

    Route::get('/edit-blog/{id}', [BlogController::class, 'edit'])->name('edit-blog');
//    Route::get('/delete-blog/{id}', [BlogController::class, 'delete'])->name('delete-blog');

    Route::post('/update-blog/{id}', [BlogController::class, 'update'])->name('update-blog');
});
