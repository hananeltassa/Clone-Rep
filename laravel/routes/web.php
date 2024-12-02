<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::post('register', [UserController::class, 'addUser']);

Route::get('/', function () {
    return view('welcome');
});
