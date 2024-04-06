<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')
    ->middleware(['auth:sanctum', 'verified'])
    ->name('admin.')
    ->group(function () {

        Route::resource('roles', App\Http\Controllers\RoleController::class)
            ->names('roles');
        Route::resource('permissions', App\Http\Controllers\PermissionController::class)
            ->names('permissions');
        Route::resource('users', App\Http\Controllers\UserController::class)
            ->names('users');
        Route::resource('personal-infos', App\Http\Controllers\PersonalInfoController::class)
            ->names('personal-infos');

    });
