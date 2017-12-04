@extends ('layout.master')

@section ('content')

<div class="container">
	<div class="row">
		<div class="col-md-1"></div>

		<div class="col-md-10">
			<h2>John Doe
				<span class="pull-right">
					ID: 1234
				</span>
			</h2>

			<h3>905-123-4567
				<span class="pull-right">
					john.doe@gmail.com
				</span>
			</h3>
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