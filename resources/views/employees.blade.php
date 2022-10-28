@foreach ($employees as $employee)
	<div class="row">
		<span class="name">{{$employee->f_name}} {{$employee->l_name}}</span>
		<span class="company">{{$employee->company->name}}</span>
	</div>
@endforeach