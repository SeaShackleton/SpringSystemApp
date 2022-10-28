<div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
	<table>
		<thead>
			<tr>
				<th>Company Name</th>
				<th>Employees</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($companies as $company)
			<tr class="borderBottom">
				<td>
					{{$company->name}}
				</td>
				<td>
					{{$company->employees_count}}
				</td>
					
			</tr>
		@endforeach
		</tbody>
	</table>
</div>

