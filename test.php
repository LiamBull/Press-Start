<?php include('./Layouts/header.php'); ?>

<div id="demo" class="row"></div>

<div id="demo2" class="row"></div>


<script type="text/javascript">

var jsonObj = {
      brand : "Nintendo of America",
      description : " ",
      esrb_rating : "E",
      genre : "Puzzle",
      image_links : [ "https://static-ca.ebgames.ca/images/products/702402/3max.jpg" ],
      price : "$34.99",
      product_id : "308434",
      rating : "4.00",
      release_date : "TBD",
      source_url : "https://www.ebgames.ca/3DS/Games/308434/professor-layton-and-the-miraclemask",
      title : "Professor Layton and the MiracleMask"
    };
var jsonObj2 = {
      brand : "2K Games",
      description : " Immersive Story ? From BioShock creators Irrational Games comes an all-new chapter of the BioShock story. The year is 1912 and you?re Booker DeWitt, a former Pinkerton agent with his life on the line. His mission: rescue the mysterious Elizabeth from the sky-city Columbia or never leave it alive. ",
      esrb_rating : "M",
      genre : "Action",
      image_links : [ "https://static-ca.ebgames.ca/images/products/701324/3max.jpg" ],
      price : "$9.99",
      product_id : "306069",
      rating : "4.14",
      release_date : "TBD",
      source_url : "https://www.ebgames.ca/PS3/Games/306069/bioshock-infinite-season-pass-now-available",
      title : "BioShock Infinite (Season Pass Now Available)"
    }


for (var i = 0; i < 4; i++) {
	// $('#row').appendChild(item_card_creation());
	document.getElementById("demo").appendChild(item_card_creation(jsonObj));
}

for (var i = 0; i < 4; i++) {
	// $('#row').appendChild(item_card_creation());
	document.getElementById("demo2").appendChild(item_card_creation(jsonObj2));
}
</script>
<?php include('./Layouts/footer.php'); ?>