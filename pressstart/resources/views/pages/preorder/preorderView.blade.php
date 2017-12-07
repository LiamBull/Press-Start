@extends ('layout.master')

@section('content')


<div class="container">
	<div class="col-md-12">


		<!-- ROW 1 YO-->
		<div class="row">
			<div class="col-md-3">
				<h1>Far Cry 5</h1>
			</div>
			<div class="pull-right">
				<button type="submit" class="btn btn-primary">Save Changes</button>
				<a href="/preorder" class=" btn btn-default">Return</a>
			</div>
		</div>

		<!-- ROW 2 YO-->
		<div class="row">
			<div class="col-md-12">
				<h5>by Sony Computer Entertainment</h5>
				<h6>Playstation 4</h6>
			</div>
		</div>

		<!-- ROW 3 YO-->
		<div class="row">
			<div>
				<div class="col-md-5 itemImageBox">
					<img class="itemImage" src="https://vignette.wikia.nocookie.net/farcry/images/3/34/FC5452562495563526.jpg/revision/latest?cb=20170524161212?$TwoColumn_Image$">
				</div>


				<div class="col-md-3">
					<div class="row">
						<label for="formGroupPrice">PRICE</label>
						<p>$79.99</p>
					</div>

					<br/>

					<div class="row">
						<label for="formGroupGenre">GENRE</label>
						<p>Action</p>
					</div>

					<br/>

					<div class="row">
						<label for="formGroupDate">RELEASE DATE</label>
						<p>2-27-2018</p>
					</div>

					<br/>

					<div class="row">
						<label for="formGroupId">ITEM CODE</label>
						<p>I190</p>
					</div>

					<br/>
				</div>


				<div class="col-md-3 pull-right">
					<div class="row">
						<label for="formGroupCustomerId">CUSTOMER ID</label>
						<input type="text" class="form-control" id="formGroupCustomerId" value="C555" readonly/>
					</div>

					<br/>

					<div class="row">
						<label for="formGroupCustomerName">CUSTOMER NAME</label>
						<input type="text" class="form-control" id="formGroupCustomerName" placeholder="Customer Name" value="Jane Doe" required/>
					</div>

					<br/>

					<div class="row">
						<label for="formGroupEmail">CUSTOMER EMAIL</label>
						<input type="text" class="form-control" id="formGroupEmail" placeholder="example@email.com" value="jane_doe@email.com" required/>
					</div>

					<br/>

					<div class="row">
						<label for="formGroupPhone">CUSTOMER PHONE</label>
						<input type="text" class="form-control" id="formGroupPhone" value="289-999-9999" required/>
					</div>

					<br/>

					<div class="row">
						<label for="formGroupOwing">AMOUNT OWING</label>
						<input type="text" class="form-control" id="formGroupOwing" placeholder="$##.##" value="$79.99" required/>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection