<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;


Route::post('users', [UserController::class, 'addUser']);  
Route::get('users', [UserController::class, 'getUsers']); 
Route::get('users/{id}', [UserController::class, 'getUser']); 
Route::put('users/{id}', [UserController::class, 'updateUser']); 
Route::delete('users/{id}', [UserController::class, 'deleteUser']);  


Route::post('projects', [ProjectController::class, 'createProject']);  
Route::get('projects', [ProjectController::class, 'getProjects']);  
Route::get('projects/{id}', [ProjectController::class, 'getProject']);
Route::put('projects/{id}', [ProjectController::class, 'updateProject']);  
Route::delete('projects/{id}', [ProjectController::class, 'deleteProject']); 
