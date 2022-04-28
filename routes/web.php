<?php

use App\Http\Controllers\EconomicActivityController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Sudo\PermissionController;
use App\Http\Controllers\Sudo\RoleController as SudoRoleController;
use App\Http\Controllers\Sudo\RolePermissionController;
use App\Http\Controllers\Sudo\UserController;
use App\Http\Controllers\Sudo\UserRoleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('economicactivities', EconomicActivityController::class)->middleware(['auth:sanctum', 'verified']);
Route::resource('incomes', IncomeController::class)->middleware(['auth:sanctum', 'verified']);
//Route::resource('users', UserController::class)->middleware(['auth:sanctum', 'verified']);
Route::resource('addresses', AddressController::class)->middleware(['auth:sanctum', 'verified']);

Route::get('no-autorizado', function () {
    return "Usted no es mayor de edad SALV";
});

Route::resource('roles', SudoRoleController::class)->names('roles');
Route::resource('permissions', PermissionController::class)->names('permissions');
Route::resource('users', UserController::class)->names('users');
Route::resource('usersrole', UserRoleController::class)->names('usersrole');
Route::resource('rolespermission', RolePermissionController::class)->names('rolespermission');
Route::resource('rolespermission', RolePermissionController::class)->names('rolespermission');
Route::resource('projects', ProjectController::class)->names('projects');