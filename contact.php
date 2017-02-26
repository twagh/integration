<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact | Integration Academy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]>
		<link rel="stylesheet" href="assets/css/ie9.css" />
		<![endif]-->
		<!--[if lte IE 8]>
		<link rel="stylesheet" href="assets/css/ie8.css" />
		<![endif]-->
		<style>
			#map {
			width: 100%;
			height: 400px;
			}
		</style>
	</head>
	<body>
		<!-- Wrapper -->
		<div id="wrapper">
			<!-- Main -->
			<div id="main">
				<div class="inner">
					<!-- Header -->
					<?php include('header.php') ?>
					<!-- Banner -->
					<section id="contact">
						<header class="major">
							<h2>Get in touch</h2>
						</header>
						<form method="post" action="#">
							<div class="row uniform">
								<div class="6u 12u$(xsmall)">
									<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" required>
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" required>
								</div>
								<!-- Break -->
								<div class="12u$">
									<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="4" required style="resize: none;"></textarea>
								</div>
								<!-- Break -->
								<div class="12u$">
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special"></li>
										<li><input type="reset" value="Reset"></li>
									</ul>
								</div>
								<div class="12u$">
									<div id="map"></div>
								</div>
							</div>
						</form>
						<div class="row">
							<div class="4u 12u$(medium)">
								<ul class="contact">
									<li class="fa-envelope-o"><a href="mailto:latesh644@gmail.com">latesh644@gmail.com</a></li>
								</ul>
							</div>
							<div class="4u 12u$(medium)">
								<ul class="contact">
									<li class="fa-phone">(+91) 77159 16926, 77159 16926</li>
								</ul>
							</div>
							<div class="4u 12u$(medium)">
								<ul class="contact">
									<li class="fa-map-marker">101, Integration Academy, Shreeji Solitaire, Khadakpada, Kalyan(W)</li>
								</ul>
							</div>
						</div>
					</section>
				</div>
			</div>
			<!-- Sidebar -->
			<?php
				$page = "contact";
				include('sidebar.php');
			?>
		</div>
		<!-- Scripts -->
		<script>
			function initMap() {
			  var uluru = {lat: 19.253163, lng: 73.136461};
			  var map = new google.maps.Map(document.getElementById('map'), {
			    zoom: 17,
			    center: uluru
			  });
			  var marker = new google.maps.Marker({
			    position: uluru,
			    map: map
			  });
			}
		</script>
		<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmlqZvprZ3H_GB6TOQiEdOCiT4w6_3WGc&callback=initMap"></script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>
	</body>
</html>