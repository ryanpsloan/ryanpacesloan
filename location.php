<?php

?>
<!DOCTYPE html>
<html>

<head>
	<!-- Latest compiled and minified CSS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script>
		function initialize() {
			var mapCanvas = document.getElementById('map-canvas');
			var mapOptions = {
				center: new google.maps.LatLng(35.1107, -106.6100),
				zoom: 8,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			var map = new google.maps.Map(mapCanvas, mapOptions);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<style>
		body {
			background-image: linear-gradient(90deg, red, yellow );
		}
		.homeLink {
			color: whitesmoke;
			text-decoration: none;
		}
		.homeLink:hover{
			color: cadetblue;
		}
		#headLink{
			margin-left: 2.5em;
			margin-top: 3em;
		}
		#cirAst {
			position: absolute;
			top: 99%;
			right: 2%;
			color: #ADD8E6;
			text-align: center;
			font-size: 20px;
			border-radius: 100%
			border: 2px solid white;
		}

		#map-canvas {
			position: absolute;
			top: 18%;
			left: 28%;
			width: 500px;
			height: 400px;
			background-color: #CCC;
		}
	</style>
</head>

<body>
<header>
<p id="headLink"><a class="homeLink" href="index.php">Home</a></p>
</header>
<div id="map-canvas"></div>
<a class="homeLink" href="index.php">
		<p id="cirAst">&circledast;</p>
</a>

</body>
</html>