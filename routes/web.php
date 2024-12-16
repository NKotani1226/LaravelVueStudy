<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\ValidationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userlist', [UserListController::class,"index"]);
Route::get('/validation', [ValidationController::class,"index"]);