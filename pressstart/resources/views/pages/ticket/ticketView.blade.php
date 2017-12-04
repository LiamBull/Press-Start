@extends ('layout.master')

@section ('content')

<div class="container">
	<div class="row">
		<div class="col-md-1"></div>

		<div class="col-md-10">
			<h2>My computer won't work
				<span class="pull-right">
					T-ID: A120 / C-ID: C234 / E-ID: E123
				</span>
			</h2>

			<h3>2015-05-02
				<span class="pull-right">
					Complete
				</span>
			</h3>
		</div>

		<div class="col-md-1"></div>
	</div> <!-- End of Row 1 -->

	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
				<thead>
					<th>Comment</th>
					<th class="text-right">Date</th>
					<th class="text-right">Employee ID</th>
				</thead>
				<tbody>
					<td>User error</td>
					<td class="text-right">2017-12-03</td>
					<td class="text-right">E102</td>
				</tbody>
			</table>
		</div>
	</div> <!-- End of Row 2 -->

</div>

@endsection