<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('consumptions', App\Http\Controllers\ConsumptionController::class);
Route::resource('cows', App\Http\Controllers\CowController::class);
Route::resource('customers', App\Http\Controllers\CustomerController::class);
Route::resource('employees', App\Http\Controllers\EmployeeController::class);
Route::resource('expenses', App\Http\Controllers\ExpenseController::class);
Route::resource('permissions', App\Http\Controllers\PermissionController::class);
Route::resource('productions', App\Http\Controllers\ProductionController::class);
Route::resource('records', App\Http\Controllers\RecordController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('sales', App\Http\Controllers\SaleController::class);
Route::resource('suppliers', App\Http\Controllers\SupplierController::class);
Route::resource('users', UserController::class);
