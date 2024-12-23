<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('get-register', [AuthController::class, 'create'])->name('get-register');
Route::post('register-account', [AuthController::class, 'store'])->name('register-account');
Route::get('get-login', [AuthController::class, 'get_login_form'])->name('get-login');

//************************projects routs  */
Route::get('get-add-projects', [ProjectController::class, 'create'])->name('projects.add');
Route::get('get-projects', [ProjectController::class, 'index'])->name('projects.get');
Route::post('create-projects', [ProjectController::class, 'store'])->name('projects.store');

Route::get('/dashboard', function () {
    return view('users.user_profile');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
