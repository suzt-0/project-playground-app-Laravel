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

Route::get('/signup', function(){
    return view('signup');
})->name('signup');

Route::get('/test', function(){
    return view('test');
})->name('test');

Route::get('/about', function(){
    // return a static about page with no data from database
})->name('about');

Route::get('/contacts', function(){
    // return a static about page with no data from database
})->name('contacts');

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


