<?php

use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::view('/login', 'login')->name('login')->middleware(['guest']);
Route::post('logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function ()
{
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('/documents', DocumentController::class)->names('documents');
});
