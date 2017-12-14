@extends ('layout.master')

@section ('content')

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>

		<div class="col-md-10 text-center">
			<form action="/customer/{{ $customer->id }}" method="POST">
				{{ csrf_field() }}
				<h3>
					<div class="row">
						<div class="form-group col-md-3">
							<label for="formGroupId">Customer ID</label>
							<input type="text" class="form-control" id="formGroupId" value="{{ $customer->id }}" readonly/>
						</div>
						<div class="form-group col-md-3">
							<label for="formGroupFirstName">First Name</label>
							<input name="firstName" type="text" class="form-control" id="formGroupFirstName" value="{{ $customer->firstName }}" required/>
						</div>
						<div class="form-group col-md-4">
							<label for="formGroupLastName">Last Name</label>
							<input name="lastName" type="text" class="form-control" id="formGroupLastName" value="{{ $customer->lastName }}" required/>
						</div>
					</div>
				</h3>

				<h3>
					<div class="row">
						<div class="form-group col-md-5">
							<label for="formGroupPhone">Phone</label>
							<input name="phoneNumber" type="text" class="form-control" id="formGroupPhone" value="{{ $customer->phoneNumber }}" required/>
						</div>
						<div class="form-group col-md-5">
							<label for="formGroupEmail">Email</label>
							<input name="email" type="text" class="form-control" id="formGroupEmail" placeholder="Email" value="{{ $customer->email }}" required/>
						</div>
					</div>
				</h3>

				<div class="row col-md-10">
					<button type="submit" class="btn btn-primary">Save Changes</button>
				</div>
			</form>	
		</div>

		<div class="col-md-1"></div>
	</div> <!-- End Row 1 -->

	<div class="row">

		<div class="col-md-5">
			<h4 class="text-center">Purchases</h4>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Item</th>
						<th>Price</th>
						<th>Purchase Date</th>
						<th>Warranty Expiration</th>
					</tr>
				</thead>
				<tbody>
					@for ($i = 0; $i < 15; $i++)
					<tr>
						<td>Bad Rats</td>
						<td>$10</td>
						<td>2017-01-01</td>
						<td>2017-01-02</td> <!-- This date will only be present for hardware -->
					</tr>
					@endfor
				</tbody>
			</table>
		</div>

		<div class="col-md-2"></div>

		<div class="col-md-5">
			<h4 class="text-center">Tickets</h4>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Subject</th>
						<th>Create Date</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					@for ($i = 0; $i < 15; $i++)
					<tr>
						<td>A012</td>
						<td>Bad Rats Sucks!</td>
						<td>2017-01-01</td>
						<td class="text-warning">Need Supervisor</td>
					</tr>
					@endfor
				</tbody>
			</table>
		</div>

	</div> <!-- End Row 2 -->
</div>

@endsection