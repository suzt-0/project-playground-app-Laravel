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

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/user-manual', function(){
    return view('user-manual');
})->name('user-manual');

Route::get('/project', function(){
    return view('project');
})->name('project');

Route::get('/project_admin', function(){
    return view('project_admin');
})->name('project_admin');

Route::get('/project_member', function(){
    return view('project_member');
})->name('project_member');

Route::get('/task', function(){
    return view('task');
})->name('task');



