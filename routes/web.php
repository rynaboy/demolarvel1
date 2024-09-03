<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\SettingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Public Routes for Authentication and Registration
Route::middleware('guest')->group(function () {
    Route::get('/signin', function () {
        return view('account-pages.signin');
    })->name('signin');

    Route::get('/signup', function () {
        return view('account-pages.signup');
    })->name('signup');

    Route::get('/sign-up', [RegisterController::class, 'create'])
        ->name('sign-up');

    Route::post('/sign-up', [RegisterController::class, 'store']);

    Route::get('/sign-in', [LoginController::class, 'create'])
        ->name('sign-in');

    Route::post('/sign-in', [LoginController::class, 'store']);

    Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])
        ->name('password.request');

    Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])
        ->name('password.email');

    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('/reset-password', [ResetPasswordController::class, 'store']);
});

// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect('/dashboard');
    });



    Route::get('/tables', function () {
        return view('tables');
    })->name('tables');

    Route::get('/wallet', function () {
        return view('wallet');
    })->name('wallet');


    Route::get('/profile', function () {
        return view('account-pages.profile');
    })->name('profile');

    Route::post('/logout', [LoginController::class, 'destroy'])
        ->name('logout');

    Route::get('/laravel-examples/user-profile', [ProfileController::class, 'index'])
        ->name('users.profile');

    Route::put('/laravel-examples/user-profile/update', [ProfileController::class, 'update'])
        ->name('users.update');

    Route::get('/laravel-examples/users-management', [UserController::class, 'index'])
        ->name('users-management');



    Route::prefix('members')->group(function () {
    Route::get('/', [MemberController::class, 'create'])->name('members.create');
    // Route::get('{id}', [MemberController::class, 'show'])->name('members.show');
    // Route::post('/', [MemberController::class, 'store'])->name('members.store');
    // Route::put('{id}', [MemberController::class, 'update'])->name('members.update');
    // Route::delete('{id}', [MemberController::class, 'destroy'])->name('members.destroy');
    });

    Route::prefix('/dashboard')->group(function(){
        Route::get('/', [Dashboard::class, 'index'])->name('dashboard');
    });

    Route::prefix('/settings')->group(function(){
        Route::get('/commune', [SettingController::class, 'commune'])->name('commune');
    });



});
