<?php

use Illuminate\Support\Facades\Route;
use App\Models\Company;
use App\Models\Employee;

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
	$Company = new Company;
	$Companies = $Company::withCount("employees")->get();
	
	$Employee = new Employee;
	$Employees = $Employee::with("company")->orderBy('id', 'DESC')->get();
	
    return view('welcome', ["companies" => $Companies, "employees" => $Employees]);
});
