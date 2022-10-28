<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Employee;
use App\Models\Company;

class EmployeeController extends Controller
{
    //
	public function NewEmployee(Request $request)
	{
		
		$validator = Validator::make($request->all(), [
            'FirstName' => 'required|max:255',
            'LastName' => 'required|max:255',
            'CompanyId' => 'required|numeric'
        ]);
		
		//if errors in validation return the errors
		if( $validator->fails() ){
			return ["error"=> $validator->errors()];
		}
		
		
		$employee = new Employee;
		$employee->f_name = $request->FirstName;
		$employee->l_name = $request->LastName;
		$employee->company_id = $request->CompanyId;
		$employee->save();
		
		//get list of all companies so we can update the user
		$Company = new Company;
		$Companies = $Company::withCount("employees")->get();
		$CompaniesString = view('companies', ["companies" => $Companies])->render();
		
		$Employee = new Employee;
		$Employees = $Employee::with("company")->orderBy('id', 'DESC')->get();
		$EmployeesString = view("employees", ["employees" => $Employees])->render();
		
		return ["companies" => $CompaniesString, "employees" => $EmployeesString];
	}
}
