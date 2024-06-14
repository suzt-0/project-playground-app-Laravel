<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectMemberController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/register', function(){
    return view('register');
})->name('register');

Route::get('/test', function(){
    return view('test');
})->name('test');

Route::controller(ProjectController::class)->group(function () {
    // add routes related to ProjectController here
});

Route::controller(ProjectMemberController::class)->group(function () {
    // add routes related to ProjectMemberController here
});

Route::controller(TaskController::class)->group(function () {
    // add routes related to TaskController here
});

Route::controller(CommentController::class)->group(function () {
    // add routes related to CommentController here
});

Route::controller(UserController::class)->group(function () {
    // add routes related to UserController here
});


