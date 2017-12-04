@extends ('layout.master')

@section ('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h2>Tickets
				<small>
					<div class="pull-right">
						<a href="/ticket/create" class="btn btn-primary">New Ticket</a>
					</div>
					<div class="input-group pull-right" style="padding-top: 10px;">
						<input type="text" class="form-control" placeholder="Search tickets">
						<span class="input-group-btn">
							<button type="button" class="btn btn-secondary">Search</button>
						</span>
					</div>
				</small>
			</h2>

			<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Submit Date</th>
						<th>Description</th>
						<th>Status</th>
						<th>Customer ID</th>
						<th>Employee ID</th>
						<th>View</th>
					</tr>
				</thead>
				<tbody>
					@for ($i = 0; $i < 15; $i++)
					<tr>
						<td>A120</td>
						<td>2015-05-02</td>
						<td>My computer won't work</td>
						<td class="text-success">Complete</td>
						<td>C134</td>
						<td>E102</td>
						<td><a href="/ticket/view" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"></i></a></td>
					</tr>
					@endfor
				</tbody>
			</table>

		</div>
	</div>
</div>

@endsection