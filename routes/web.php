<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use Spatie\Honeypot\ProtectAgainstSpam;


Route::get('/',[FrontController::class,'index'])->name('landing');

Route::get('/download/{filename}', [FrontController::class,'download'])->name('download');

Route::post('/contact', [ContactController::class,'contactme'])->name('contact')->middleware(ProtectAgainstSpam::class);




Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



    Route::get('/add-blog', [BlogController::class, 'add'])->name('add-blog');
    Route::post('/create-blog', [BlogController::class, 'create'])->name('create-blog');
    Route::get('/manage-blog', [BlogController::class, 'manage'])->name('manage-blog');

    Route::get('/edit-blog/{id}', [BlogController::class, 'edit'])->name('edit-blog');
    Route::get('/delete-blog/{id}', [BlogController::class, 'delete'])->name('delete-blog');
    Route::post('/update-blog/{id}', [BlogController::class, 'update'])->name('update-blog');



    Route::get('/add-service', [ServiceController::class, 'add'])->name('add.service');
    Route::post('/create-service', [ServiceController::class, 'create'])->name('create.service');
    Route::get('/manage-service', [ServiceController::class, 'manage'])->name('manage.service');

    Route::get('/edit-service/{id}', [ServiceController::class, 'edit'])->name('edit.service');
    Route::post('/update-service/{id}', [ServiceController::class, 'update'])->name('update.service');
    Route::get('/delete-service/{id}', [ServiceController::class, 'delete'])->name('delete.service');


});
