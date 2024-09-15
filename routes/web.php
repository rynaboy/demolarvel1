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
    // Redirect root to dashboard
    Route::get('/', function () {
        return redirect('/dashboard');
    });

    // Route to tables view
    Route::get('/tables', function () {
        return view('tables');
    })->name('tables');

    // Route to wallet view
    Route::get('/wallet', function () {
        return view('wallet');
    })->name('wallet');

    // Route to profile view
    Route::get('/profile', function () {
        return view('account-pages.profile');
    })->name('profile');

    // Route to handle logout
    Route::post('/logout', [LoginController::class, 'destroy'])
        ->name('logout');

    // Route to user profile
    Route::get('/laravel-examples/user-profile', [ProfileController::class, 'index'])
        ->name('users.profile');

    // Route to update user profile
    Route::put('/laravel-examples/user-profile/update', [ProfileController::class, 'update'])
        ->name('users.update');

    // Route to user management
    Route::get('/laravel-examples/users-management', [UserController::class, 'index'])
        ->name('users-management');

    // Routes for members
    Route::prefix('members')->group(function () {
        Route::get('/', [MemberController::class, 'create'])->name('members.create');
        Route::post('/create_new_member', [MemberController::class, 'create_new_member'])->name('create_new_member');
        Route::get('/list', [MemberController::class, 'list'])->name('member.list');
        Route::post('/getMembers', [MemberController::class, 'getMembersAjax'])->name('getMembers');
    //​​​ របាយការណ៏
        Route::get('/list_member_cpp', [MemberController::class, 'list_member_cpp'])->name('member.list_member_cpp');
        Route::get('/list_member_not_in_cpp', [MemberController::class, 'list_member_not_in_cpp'])->name('member.list_member_not_in_cpp');
    });

    // Routes for dashboard
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [Dashboard::class, 'index'])->name('dashboard');

    });

    // Routes for settings
    Route::prefix('settings')->group(function () {
        // Routes for commune settings
        Route::prefix('commune')->group(function () {
            Route::get('/', [SettingController::class, 'commune'])->name('commune');
            Route::post('/store', [SettingController::class, 'commune_store'])->name('commune_store');
            Route::post('/getCommune', [SettingController::class, 'getCommuneAjax'])->name('getCommune');
        });

        // Routes for village settings
        Route::prefix('village')->group(function () {
            Route::get('/{id}', [SettingController::class, 'village'])->name('village');
            Route::post('/getVillage', [SettingController::class, 'getVillageAjax'])->name('getVillage');
            Route::post('/store', [SettingController::class, 'village_store'])->name('village_store');
        });
    });
});
