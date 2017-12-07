@extends ('layout.master')

@section ('content')

<div class="container">
	<div class="row">

		<div class="col-md-2"></div>

		<div class="col-md-8">
			<h2 class="text-center">Employee Creation</h2>
			<form>
				<div class="row">
					<div class="form-group col-md-6">
						<label for="formGroupUserName">Username</label>
						<input type="text" class="form-control" id="formGroupUserName" placeholder="Username" required/>
					</div>
					<div class="form-group col-md-6">
						<label for="formGroupPassword">Password</label>
						<input type="password" class="form-control" id="formGroupPassword" placeholder="Password" required/>
					</div>
				</div>

				<div class="form-group">
					<label for="formGroupFirstName">First Name</label>
					<input type="text" class="form-control" id="formGroupFirstName" placeholder="First Name" required/>
				</div>

				<div class="form-group">
					<label for="formGroupLastName">Last Name</label>
					<input type="text" class="form-control" id="formGroupLastName" placeholder="Last Name" required/>
				</div>

				<div class="row">
					<div class="form-group col-md-6">
						<label for="formGroupType">Type</label>
						<select name="type" class="form-control">
						  <option value="tehcnician">Technician</option>
						  <option value="sales" selected>Sales</option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="formGroupSIN">SIN</label>
						<input type="text" class="form-control" id="formGroupSIN" placeholder="SIN" required/>
					</div>
				</div>

				<div class="form-group">
					<label for="formGroupEmail">Email</label>
					<input type="text" class="form-control" id="formGroupEmail" placeholder="Email" required/>
				</div>

				<div class="form-group">
					<label for="formGroupPhone">Phone</label>
					<input type="text" class="form-control" id="formGroupPhone" placeholder="Phone Number" required/>
				</div>
				
				<div class="form-group">
					<label for="formGroupAddress">Address</label>
					<input type="text" class="form-control" id="formGroupAddress" placeholder="Address" required/>
				</div>

				<div class="row text-center">
					<button type="submit" class="btn btn-primary">Save</button>
					<a href="/employee" class="btn btn-danger">Cancel</a>
				</div>
			</form>
		</div>

		<div class="col-md-2"></div>

	</div>
</div>

@endsection