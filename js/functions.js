function item_card_creation() {
	var itemBox = document.createElement("div");
	    itemBox.class= 'col-md-3'
	    itemBox.style= 'margin-bottom: 1em; margin-top: 1em;'
	// 3 wide container holding the contents of the gamebox added the style cuz im lazy
	    // itemBox.innerHTML += '<div class="col-md-3" style="margin-bottom: 1em; margin-top: 1em;">';
		//  the actual cardbox 
	    itemBox.innerHTML += '<div class= "card">';
	    // this is what pops up as the user hovers over the item 
	    itemBox.innerHTML += '<a href="./itemView.html">  <a href="./itemView.php"> <div class="moreInfo"><p class="info">More Info</p></div></a></a>';
	    // div that Contains the img
	    itemBox.innerHTML += '<div class= "gameArt">';
	    // status of the stock if there out itll pop up
	    itemBox.innerHTML += '<div class= "statusDiv statusNew">Out of Stock</div>';
	    // actual image containing the game art stored 
	    itemBox.innerHTML += '<img class= "GameArtImage" src="https://static-ca.ebgames.ca/images/products/732794/3max.jpg" alt="Game Art">';
	    // GAME INFO OVERVIEW
	    itemBox.innerHTML += '<p class= "card-title"> Overwatch </p>';
	    itemBox.innerHTML += '<p class= "card-system">Xbox One </p>';
	    itemBox.innerHTML += '<p class= "card-price"> $69.99</p>';
	    itemBox.innerHTML += '</div>'; //END OF CARD DIV

	 return itemBox;
}




      //   <!-- 3 wide container holding the contents of the gamebox added the style cuz im lazy -->
      //    <div class="col-md-3" style="margin-bottom: 1em; margin-top: 1em;">
          
      //     <!-- the actual cardbox -->
      //     <div class="card ">
      //       <!-- this is what pops up as the user hovers over the item -->
      //      <a href="./itemView.html">  <a href="./itemView.php"> <div class='moreInfo'><p class="info">More Info</p></div></a></a>
      //       <!-- div that Contains the img -->
      //       <div class="gameArt">
      //         <!-- status of the stock if there out itll pop up -->
      //         <div class='statusDiv statusOutOfStock'>Out of Stock</div>
      //         <!-- actual image containing the game art stored -->
      //         <img class='GameArtImage' src="https://static-ca.ebgames.ca/images/products/732794/3max.jpg" alt="Game Art">
              
      //       </div>

      //       <!-- GAME INFO OVERVIEW -->
      //       <p class="card-title"> Overwatch </p>
      //       <p class="card-system">Xbox One </p>
      //       <p class="card-price"> $69.99</p>

      //   </div> <!-- END OF CARD DIV -->
      // </div>   <!-- END OF COL DIV -->