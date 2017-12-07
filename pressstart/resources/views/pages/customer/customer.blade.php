@extends ('layout.master')

@section ('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h2>Customer Information
				<small>
					<span class="btn-group pull-right">
						<a href="/customer/create" class="btn btn-primary">New Customer</a>
					</span>
				</small>
			</h2>

			<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Phone #</th>
						<th>Email</th>
						<th class="text-right">View/Edit</th>
						<th class="text-right">Delete</th>
					</tr>
				</thead>
				<tbody>
					<!-- This will likely become a foreach. This is just for demo purposes -->
					@for ($i = 0; $i < 15; $i++)
					<tr>
						<td>C1234</td>
						<td>John</td>
						<td>Doe</td>
						<td>905-123-4567</td>
						<td>john.doe@gmail.com</td>
						<td class="text-right"><a href="/customer/view" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"></i></a></td>
						<td class="text-right"><button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></td>
					</tr>
					@endfor
				</tbody>
			</table>
		</div>

	</div>
</div>

@endsection