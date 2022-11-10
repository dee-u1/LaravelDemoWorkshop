<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IndustryController;

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
    //return view('Employees.employee'); 
});

//Route::get('/employee', function () {
    //return view('Employees.employee'); //Employees is the folder, employee is the file
//});

Route::resource('departments', DepartmentController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('industries', IndustryController::class);
