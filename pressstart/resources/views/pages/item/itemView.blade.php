@extends ('layout.master')

@section('content')


<div class="container">
	<div class="col-md-12">


		<!-- ROW 1 YO-->
		<div class="row">
			<div class="col-md-3">
				<label for="formGroupName">NAME/TITLE</label>
				<input type="text" class="form-control" id="formGroupName" placeholder="Name/Title" value="Last Of Us" required/>
			</div>
			<div class="pull-right">
				<button type="submit" class="btn btn-primary">Save Changes</button>
			</div>
		</div>

		<br/>

		<!-- ROW 2 YO-->
		<div class="row">
			<div class="col-md-3">
				<label for="formGroupDeveloper">DEVELOPER</label>
				<input type="text" class="form-control" id="formGroupDeveloper" placeholder="ex. Sony" value="Sony Computer Entertainment" required/>
				<br/>
				<label for="formGroupPrice">CONSOLE</label>
				<input type="text" class="form-control" id="formGroupConsole" placeholder="ex. Playstation" value="Playstation 4" required/>
			</div>
		</div>

		<br/>

		<!-- ROW 3 YO-->
		<div class="row">
			<div>

				<div class="col-md-5 itemImageBox">
					<img class="itemImage" src="http://psmedia.playstation.com/is/image/psmedia/the-last-of-us-remastered-two-column-01-ps4-us?$TwoColumn_Image$">
				</div>

				<div class="col-md-4">
					<label for="formGroupDescription">DESCRIPTION</label>
					<textarea class="form-control" rows="26" id=formGroupDescription>The Last of Us is an action-adventure survival horror video game developed by Naughty Dog and published by Sony Computer Entertainment. It was released for the PlayStation 3 worldwide on June 14, 2013. Players control Joel, a smuggler tasked with escorting a teenage girl named Ellie across a post-apocalyptic United States. The Last of Us is played from a third-person perspective; players use firearms and improvised weapons, and can use stealth to defend against hostile humans and cannibalistic creatures infected by a mutated strain of the Cordyceps fungus. In the game's online multiplayer mode, up to eight players engage in cooperative and competitive gameplay.
					</textarea>
				</div>

				<div class="col-md-3 pull-right">
					<div class="row">
						<label for="formGroupPrice">PRICE</label>
						<input type="text" class="form-control" id="formGroupPrice" placeholder="$##.##" value="$1159.99" required/>
					</div>

					<br/>

					<div class="row">
						<label for="formGroupGenre">GENRE</label>
						<input type="text" class="form-control" id="formGroupGenre" placeholder="Genre" value="Action" required/>
					</div>

					<br/>

					<div class="row">
						<label for="formGroupDate">RELEASE DATE</label>
						<input type="text" class="form-control" id="formGroupDate" placeholder="MM-DD-YYYY" value="06-14-2013" required/>
					</div>

					<br/>

					<div class="row">
						<label for="formGroupId">ITEM CODE</label>
						<input type="text" class="form-control" id="formGroupId" value="I190" readonly/>
					</div>

					<br/>

					<div class="row">
						<img class="ratingImg" src="http://images2.wikia.nocookie.net/__cb20121105184161/nintendo/en/images/1/12/ESRB_M.png">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection