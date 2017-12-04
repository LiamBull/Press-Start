@extends ('layout.master')

@section ('content')

<div class="container">
	<div class="row">

		<div class="col-md-2"></div>

		<div class="col-md-8">
			<h2 class="text-center">Ticket Creation</h2>
			<form>
				<div class="form-group">
					<label for="formGroupDescription">Description</label>
					<input type="text" class="form-control" id="formGroupDescription" placeholder="Description" required/>
				</div>

				<div class="form-group">
					<label for="formGroupCustomerID">Customer ID</label>
					<input type="text" class="form-control" id="formGroupCustomerID" placeholder="Customer ID" required/>
				</div>

				<button type="submit" class="btn btn-primary">Create</button>
			</form>
		</div>

		<div class="col-md-2"></div>

	</div>
</div>

@endsection