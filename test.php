<?php include('./Layouts/header.php'); ?>

<div id="demo" class="row"></div>




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


for (var i = 0; i < 4; i++) {
	// $('#row').appendChild(item_card_creation());
	document.getElementById("demo").appendChild(item_card_creation(jsonObj));
}
</script>
<?php include('./Layouts/footer.php'); ?>