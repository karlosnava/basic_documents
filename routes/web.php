<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\TypeController;

Route::view('/login', 'login')->name('login')->middleware(['guest']);
Route::post('logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function ()
{
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::resource('/documents', DocumentController::class)->except(['index'])->names('documents');
    Route::resource('/types', TypeController::class)->names('types');
});
