<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// get all employees
Route::get('employees', [EmployeeController::class, 'getEmployee']);

//get Specific employee detail
Route::get('employees/{id}', [EmployeeController::class, 'getEmployeeById']);

//add Employee
Route::post('employee', [EmployeeController::class, 'addEmployee']);

//Update employee
Route::put('updateEmployee/{id}', [EmployeeController::class, 'updateEmployee']);

//Delete employee
Route::delete('deleteEmployee/{id}', [EmployeeController::class, 'deleteEmployee']);
