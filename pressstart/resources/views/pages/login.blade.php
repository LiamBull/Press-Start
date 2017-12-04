@extends ('layout.master')

@section ('content')

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h1 class="text-center">Press Start Oshawa Login</h1>
			<form>
				<div class="form-group">
					<label for="formGroupUserID">User ID</label>
					<input type="text" class="form-control" id="formGroupUserID" placeholder="UserID" />
				</div>
				<div class="form-group">
					<label for="formGroupPassword">Password</label>
					<input type="password" class="form-control" id="formGroupPassword" placeholder="Password" />
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

@endsection