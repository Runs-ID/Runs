<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FindUserController;
use App\Http\Controllers\TokenValidateController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminChangeProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::post('/', [HomeController::class, 'store'])->name('home.store');
//access-login-register
Route::get('access', [AccessController::class, 'index'])->name('access.index');
Route::post('access/register', [RegisterController::class, 'index'])->name('access.register');
Route::post('access/login', [LoginController::class, 'index'])->name('access.login');
Route::post('access/Find_User', [FindUserController::class, 'index'])->name('access.Find_User');
Route::post('access/Token_Validate', [TokenValidateController::class, 'index'])->name('access.Token_Validate');
Route::post('access/Change_Password', [ChangePasswordController::class, 'index'])->name('access.Change_Password');
//panel-admin
Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::post('admin/change_profile', [AdminChangeProfileController::class, 'index'])->name('admin.change_profile');