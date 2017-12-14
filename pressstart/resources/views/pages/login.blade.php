@extends ('layout.master')

@section ('content')

<div class="container">
	<div class="row">

		<div class="col-md-3"></div>

		<div class="col-md-6">
			<h1 class="text-center">Press Start Oshawa Login</h1>
			<form method="POST" action="/login">

				{{ csrf_field() }}

				<div class="form-group">
					<label for="username">User ID</label>
					<input name="username" type="text" class="form-control" id="username" placeholder="Username" />
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input name="password" type="password" class="form-control" id="password" placeholder="Password" />
				</div>

				<button type="submit" class="btn btn-primary">Sign In</button>

			</form>
		</div>

		<div class="col-md-3"></div>

	</div>
</div>

@endsection