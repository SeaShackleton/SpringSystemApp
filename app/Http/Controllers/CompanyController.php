<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Company;

class CompanyController extends Controller
{
    //
	public function NewCompany(Request $request){
		//CompanyName=Company+Name&CompanyStreet=133+sdfl&CompanyCity=City&CompanyState=CO&CompanyZip=45620&CompanyDescription=description
		
		$validator = Validator::make($request->all(), [
            'CompanyName' => 'required|max:255',
            'CompanyStreet' => 'required|max:255',
            'CompanyCity' => 'required|max:255',
            'CompanyState' => 'required|max:255',
            'CompanyZip' => 'required|size:5',
            'CompanyDescription' => 'required|max:1024',
        ]);
		
		//if errors in validation return the errors
		if( $validator->fails() ){
			return ["error"=> $validator->errors()];
		}
		
		
		//add new company 
		$company = new Company;
		$company->name = $request->CompanyName;
		$company->street = $request->CompanyStreet;
		$company->city = $request->CompanyCity;
		$company->state = $request->CompanyState;
		$company->zip = $request->CompanyZip;
		$company->description = $request->CompanyDescription;
		$company->save();
		
		//get list of all companies so we can update the user
		$Company = new Company;
		$Companies = $Company::withCount("employees")->get();
		$CompaniesString = view('companies', ["companies" => $Companies])->render();
		
		$NewEmployees = view('newemployee', ["companies" => $Companies])->render();
				
		return ["companies" => $CompaniesString, "NewEmployees" => $NewEmployees];
	}
}
