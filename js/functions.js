function item_card_creation(jsonObj) {
	var itemBox = document.createElement("div");
	    itemBox.className = 'col-md-3'
	    itemBox.style= 'margin-bottom: 1em; margin-top: 1em;'
	// 3 wide container holding the contents of the gamebox added the style cuz im lazy
	    // itemBox.innerHTML += '<div class="col-md-3" style="margin-bottom: 1em; margin-top: 1em;">';
		//  the actual cardbox 
	    itemBox.innerHTML += '<div class= "card">'+
	    						// needs to ne changed to the items view page and pass over the itemid in the url
	                           '<a href="'+jsonObj.source_url+'"> <div class="moreInfo"><p class="info">More Info</p></div></a>'+
	                           '<div class= "gameArt">'+
	                           // needs to be fixed whenever we get the 
	 						     '<div class= "statusDiv statusNew">Out of Stock</div>'+
	   						     '<img class= "GameArtImage" src="'+ jsonObj.image_links +'" alt="Game Art">'+
	    					   '</div>'+
	   						   '<p class= "card-title">'+ jsonObj.title + '</p>'+
	   						   // needs to be changed whenever we get the system included
	    					   '<p class= "card-system">'+ jsonObj.esrb_rating + '</p>'+
	    					   '<p class= "card-price">'+ jsonObj.price + '</p>'+
	    					 '</div>';
	    
	 return itemBox;
}
