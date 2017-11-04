<?php include('./Layouts/header.php'); ?>

<div id="demo" class="row"></div>




<script type="text/javascript">
for (var i = 0; i < 4; i++) {
	// $('#row').appendChild(item_card_creation());
	document.getElementById("demo").appendChild(item_card_creation());
}

</script>
<?php include('./Layouts/footer.php'); ?>