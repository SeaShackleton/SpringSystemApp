<option value="" disabled selected>Company Name</option>
@foreach ($companies as $company)
	<option value="{{$company->id}}">{{$company->name}}</option>
@endforeach