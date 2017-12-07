@extends ('layout.master')

@section ('content')

<div class="container">
	<div class="row">

		<div class="col-md-2"></div>

		<div class="col-md-8">
			<h2 class="text-center">Item Creation</h2>
			<form>
				<div class="row">
					<div class="form-group col-md-6">
						<label for="formGroupName">Name/Title</label>
						<input type="text" class="form-control" id="formGroupName" placeholder="Name/Title" required/>
					</div>
					<div class="form-group col-md-6">
						<label for="formGroupDate">Release Date</label>
						<input type="text" class="form-control" id="formGroupDate" placeholder="MM-DD-YYYY" required/>
					</div>
				</div>

				<div class="form-group">
					<label for="formGroupDescription">Description</label>
					<input type="text" class="form-control" id="formGroupDescription" placeholder="Description" required/>
				</div>

				<div class="row">
					<div class="form-group col-md-6">
						<label for="formGroupType">Product Type</label>
						<select name="type" class="form-control">
						  <option value="game" selected>Game</option>
						  <option value="console">Console</option>
						  <option value="accessory">Accessory</option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="formGroupType">Condition</label>
						<select name="type" class="form-control">
						  <option value="new" selected>New</option>
						  <option value="good">Good</option>
						  <option value="okay">Okay</option>
						  <option value="poor">Poor</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-6">
						<label for="formGroupPrice">Price</label>
						<input type="text" class="form-control" id="formGroupPrice" placeholder="$##.##" required/>
					</div>
					<div class="form-group col-md-6">
						<label for="formGroupType">Console</label>
						<select name="type" class="form-control">
						  <option value="ps4" selected>Playstation 4</option>
						  <option value="xbox1">xBox One</option>
						  <option value="nintendo_switch">Nintendo Switch</option>
						  <option value="snes">Super Nintendo</option>
						</select>
					</div>
				</div>
				<div class="row text-center">
					<button type="submit" class="btn btn-primary">Save</button>
					<a href="#" class="btn btn-danger">Cancel</a>
				</div>
			</form>
		</div>

		<div class="col-md-2"></div>

	</div>
</div>

@endsection