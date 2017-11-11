var rootRef = firebase.database().ref().child("items");

rootRef.on("value", snap => {
	var counter = 0;
	snap.forEach(function(childSnapshot) {

		var brand = childSnapshot.child("brand").val();
        var console_type = childSnapshot.child("console").val();
        var description = childSnapshot.child("description").val();
        var esrb_rating = childSnapshot.child("esrb_rating").val();
        var genre = childSnapshot.child("genre").val();
        var image_links = childSnapshot.child("image_links").val();
        var price = childSnapshot.child("price").val();
        var product_id = childSnapshot.child("product_id").val();
        var rating = childSnapshot.child("rating").val();
        var release_date = childSnapshot.child("release_date").val();
        var source_url = childSnapshot.child("source_url").val();
        var stock_level_new = childSnapshot.child("stock_level_new").val();
        var stock_level_used = childSnapshot.child("stock_level_used").val();
        var title = childSnapshot.child("title").val();

		if (counter == 0) 
		{
			$("#table_body").append("<div class='row'>");
			console.log("open div");
		}
		else if (counter > 3) 
		{
			$("#table_body").append("</div>");
			console.log("close div");
			counter = 0;
		}

		

		$("#table_body").append("<div class='col-md-3' style='margin-bottom: 1em; margin-top: 1em;'>" +
			"<div class='card'>" +
			 "<a href='./itemView.php'> <div class='moreInfo'><p class='info'>More Info</p></div></a>"+
			 "<div class='gameArt'>"+
			  "<div class='statusDiv statusOutOfStock'>Out of Stock</div>"+
			  "<img class='GameArtImage' src=" + image_links + " alt='Game Art'></div>"+
			 "<p class='card-title'> " + title + " </p>"+
			 "<p class='card-system'>" + console_type + " </p>"+
			 "<p class='card-price'> " + price + "</p>"+
			"</div></div>");
        console.log("picture");
        counter+=1;

      });
});
