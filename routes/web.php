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
use App\Http\Controllers\SaveFormController;

#panel-admin
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DataUserHomeAdmin;
#panel-admin-users
use App\Http\Controllers\UsersAdminController;
use App\Http\Controllers\GetUsersAdminController;
use App\Http\Controllers\AddNewUserController;
use App\Http\Controllers\DeleteUserController;
use App\Http\Controllers\ModifyUserController;

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
//panel-admin-index
Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('admin/LogoutController', [LogoutController::class, 'LogoutController'])->name('admin.LogoutController');
Route::post('admin/save_form', [SaveFormController::class, 'save_form'])->name('admin.save_form');
Route::get('admin/data_user_home_Admin', [DataUserHomeAdmin::class, 'data_user_home_Admin'])->name('admin.data_user_home_Admin');
//panel-admin-users
Route::get('admin/users', [UsersAdminController::class, 'index'])->name('admin.users_index');
Route::get('admin/users/get_users_admin_controller', [GetUsersAdminController::class, 'get_users_admin_controller'])->name('admin.get_users_admin_controller');
Route::post('admin/users/AddNewUserController', [AddNewUserController::class, 'AddNewUserController'])->name('admin.AddNewUserController');
Route::post('admin/users/DeleteUserController', [DeleteUserController::class, 'DeleteUserController'])->name('admin.DeleteUserController');
Route::post('admin/users/ModifyUserController', [ModifyUserController::class, 'ModifyUserController'])->name('admin.ModifyUserController');