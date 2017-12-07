@extends ('layout.master')

@section('content')


<div class="container">
	<div class="col-md-12">

		<h2>Order Creation</h2>

		<div class="input-group pull-right" style="padding-top: 10px;">
			<input type="text" class="form-control" placeholder="Search pre-order games">
			<span class="input-group-btn">
				<button type="button" class="btn btn-secondary dropdown-toggle">Search</button>
			</span>
		</div>
		
		<br/>
		<br/>
		<br/>

		<div class="row">
			<h2 class="col-md-5">Game Information</h2>
			<h2 class="col-md-5">Customer Information</h2>
		</div>
		
		
		<br/>


		<div class="row">
			<div class="col-md-5">
				<label for="formGroupId">ITEM CODE</label>
				<input type="text" class="form-control" id="formGroupId" value="I177" readonly/>
				<br/>
				<label>TITLE</label>
				<input type="text" class="form-control" id="formGroupName" placeholder="Name/Title" value="Far Cry 5" readonly/>
				<br/>
				<label for="formGroupDeveloper">DEVELOPER</label>
				<input type="text" class="form-control" id="formGroupDeveloper" placeholder="ex. Sony" value="Sony Computer Entertainment" readonly/>
				<br/>
				<label for="formGroupPrice">CONSOLE</label>
				<input type="text" class="form-control" id="formGroupConsole" placeholder="ex. Playstation" value="Playstation 4" readonly/>
				<br/>
				<label for="formGroupPrice">PRICE</label>
				<input type="text" class="form-control" id="formGroupPrice" placeholder="$##.##" value="$79.99" readonly/>
				<br/>
				<label for="formGroupGenre">GENRE</label>
				<input type="text" class="form-control" id="formGroupGenre" placeholder="Genre" value="Action, Shooter" readonly/>
				<br/>
				<label for="formGroupDate">RELEASE DATE</label>
				<input type="text" class="form-control" id="formGroupDate" placeholder="MM-DD-YYYY" value="02-27-2018" readonly/>
				<br/>
				<img class="ratingImg" src="http://images2.wikia.nocookie.net/__cb20121105184161/nintendo/en/images/1/12/ESRB_M.png">
			</div>


			<div class="col-md-5">
				<label for="formGroupCustomerId">CUSTOMER ID</label>
				<input type="text" class="form-control" id="formGroupCustomerId" value="C555" readonly/>
				<br/>
				<label for="formGroupCustomerFirstName">CUSTOMER FIRST NAME</label>
				<input type="text" class="form-control" id="formGroupCustomerFirstName" placeholder="Customer First Name" value="Jane" required/>
				<br/>
				<label for="formGroupCustomerLastName">CUSTOMER LAST NAME</label>
				<input type="text" class="form-control" id="formGroupCustomerLastName" placeholder="Customer Last Name" value="Doe" required/>
				<br/>
				<label for="formGroupEmail">CUSTOMER EMAIL</label>
				<input type="text" class="form-control" id="formGroupEmail" placeholder="example@email.com" value="jane_doe@email.com" required/>
				<br/>
				<label for="formGroupPhone">CUSTOMER PHONE</label>
				<input type="text" class="form-control" id="formGroupPhone" value="289-999-9999" required/>
			</div>


			<div class="pull-right">
				<button type="submit" class="btn btn-primary btn-block">Submit Order</button>
				<a href="/preorder" class=" btn btn-danger btn-block">Cancel</a>
			</div>
		</div>
	</div>
</div>

@endsection