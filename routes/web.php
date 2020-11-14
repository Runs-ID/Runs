<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
#access
use App\Http\Controllers\AccessController;
use App\Http\Controllers\AccessRegisterController;
use App\Http\Controllers\AccessLoginController;
use App\Http\Controllers\RecoveryFirstStepController;
use App\Http\Controllers\RecoverySecondStepController;
use App\Http\Controllers\RecoveryThirdStepController;

#panel-admin
use App\Http\Controllers\AdminController;

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
//access
Route::get('access', [AccessController::class, 'index'])->name('access.index');
Route::post('access/register', [AccessRegisterController::class, 'register'])->name('access.register');
Route::post('access/login', [AccessLoginController::class, 'login'])->name('access.login');
Route::post('access/first_step', [RecoveryFirstStepController::class, 'first_step'])->name('admin.first_step');
Route::post('access/second_step', [RecoverySecondStepController::class, 'second_step'])->name('admin.second_step');
Route::post('access/third_step', [RecoveryThirdStepController::class, 'third_step'])->name('admin.third_step');
//panel-admin
Route::get('admin', [AdminController::class, 'index'])->name('admin.index');