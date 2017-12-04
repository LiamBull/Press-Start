@extends ('layout.master')

@section ('content')

<div class="container">
	<div class="row">

		<div class="col-md-2"></div>

		<div class="col-md-8">
			<h2 class="text-center">Customer Creation</h2>
			<form>
				<div class="form-group">
					<label for="formGroupFirstName">First Name</label>
					<input type="text" class="form-control" id="formGroupFirstName" placeholder="First Name" required/>
				</div>

				<div class="form-group">
					<label for="formGroupLastName">Last Name</label>
					<input type="text" class="form-control" id="formGroupLastName" placeholder="Last Name" required/>
				</div>

				<div class="form-group">
					<label for="formGroupPhone">Phone #</label>
					<input type="text" class="form-control" id="formGroupPhone" placeholder="Phone #" required/>
				</div>
				
				<div class="form-group">
					<label for="formGroupEmail">Email</label>
					<input type="text" class="form-control" id="formGroupEmail" placeholder="Email" required/>
				</div>
				<button type="submit" class="btn btn-primary">Create</button>
			</form>
		</div>

		<div class="col-md-2"></div>

	</div>
</div>

@endsection