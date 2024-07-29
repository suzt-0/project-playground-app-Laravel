<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectMemberController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// routes defined for welcome page 
Route::get('/', function () {
    return view('welcome');
})->name('home');


//grouped middleware for guest users
Route::middleware('guest')->group(function () {

    // routes defined for register function
    Route::get('/register', [UserController::class, 'create'])->name('register');
    Route::post('/register',[UserController::class, 'store'])->name('register');

    // routes defined for login function
    Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [UserController::class, 'login'])->name('login');

});
//grouped middleware for authenticated users
Route::middleware('auth')->group(function () {

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    //routes defined for authenticated access to browser

    // Route::get('/dashboard', [UserController::class, 'dashboardPage'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/my-projects', [ProjectController::class, 'index'])->name('my-projects');
    // Route::post('/create-project', [ProjectController::class, 'store'])->name('create-project');
    Route::get('/joined/projects', [ProjectController::class, 'joined'])->name('projects.joined');
    Route::get('/Completed/projects', [ProjectController::class, 'completed'])->name('projects.completed');
    Route::get('/failed/projects', [ProjectController::class, 'failed'])->name('projects.failed');
    
    Route::post('tasks/setProjectId', [TaskController::class, 'setProjectId'])->name('tasks.setProjectId');
    Route::get('/tasks/create/{project_id}', [TaskController::class, 'create'])->name('tasks.create');

    Route::resource('projects', ProjectController::class);
    Route::resource('joinProjects', ProjectMemberController::class);
    Route::get('/invitation/{project}',[EmailController::class, 'emailForm'])->name('mail.invite');
    Route::post('/send-mail/{project}', [EmailController::class, 'sendEmail'])->name('mail.send');

});

// test routes


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

// Route::get('/project', function(){
//     return view('project');
// })->name('project');

Route::get('/project_admin', function(){
    return view('project_admin');
})->name('project_admin');

Route::get('/project_member', function(){
    return view('project_member');
})->name('project_member');

Route::get('/task', function(){
    return view('task');
})->name('task');

// Route::get('/my-projects', function(){
//     return view('my-projects');
// })->name('my-projects');
 
Route::get('/join-projects', function(){
    return view('join-projects');
})->name('join-projects');
 
// Route::get('/create-project', function(){
//     return view('create-project');
// })->name('create-project');
 
Route::get('/create-task', function(){
    return view('create-task');
})->name('create-task');
  
Route::get('/backup', function(){
    return view('backup');
})->name('backup');
  
Route::get('/manage-task', function(){
    return view('manage-task');
})->name('manage-task');
  
Route::get('/view-task', function(){
    return view('view-task');
})->name('view-task');

Route::get('/Extra', function(){
    return view('components.Extra-parts');
})->name('Extra');

// test routes end



