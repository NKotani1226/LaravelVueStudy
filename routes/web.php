<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\UserCRUDController;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\PartsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userlist', [UserListController::class,"index"]);

Route::get('/usercrud', [UserCRUDController::class,"index"]);

Route::get('/validation', [ValidationController::class,"index"])->name('validation.index');
Route::post('/validation/store', [ValidationController::class,"store"])->name('validation.store');