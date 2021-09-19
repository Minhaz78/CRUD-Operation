<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//CRUD
Route::get('employees', [EmployeeController::class, 'index']);
Route::get('create-employee', [EmployeeController::class, 'create']);
Route::post('store-employee', [EmployeeController::class, 'store']);
Route::get('edit-employee/{id}', [EmployeeController::class, 'edit']);
Route::post('update-employee/{id}', [EmployeeController::class, 'update']);
Route::get('delete-employee/{id}', [EmployeeController::class, 'delete']);

