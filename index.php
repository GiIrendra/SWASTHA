<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	<link rel="stylesheet" href="css/_style.css">
	<!-- <link rel="stylesheet" href="style1.css"> -->
</head>

<body>


			<?php
			require 'partials/_nav.php';
			require 'partials/_menu.php';
			?>

			<!-- Writing Section -->
			<div class="panel container text-center">
				<h1>Swasth</h1>
				<p>Welcome to our customised kitchen</p>


				<section>
					<h3>Please browse our menu at top left</h3><br><br>
					<p>!!!! Enjoy food !!!!</p>
				</section>
			</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">

	</script>
	<!-- Script to show menue pannel feom right of website-->
	<?php
	if($disable==""){
	echo'<script>
		// Get the menu bar and the menu button
		var menuBar = document.getElementById("menuBar");
		var menuBtn = document.getElementById("menuBtn");

		// Add a click event listener to the menu button
		menuBtn.addEventListener("click", function() {
			// Toggle the menu bar by changing the left position
			if (menuBar.style.left === "-200px") {
				menuBar.style.left = "0";
			} else {
				menuBar.style.left = "-200px";
			}
		});
	</script>';
}?>

</body>

</html>