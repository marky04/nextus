<?php include('header.php'); ?>
<body onload="initialize()">
<script>
	function initialize() {
		var myLatlng = new google.maps.LatLng( 51.520838, -0.140261 );
		var myOptions = {
			zoom: 15,
			center: myLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map( document.getElementById( "map_canvas" ), myOptions );
	}
</script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<style>
	html {
		height: 100%;
		overflow: hidden;
	}
	body {
		margin: 0;
		padding: 0;
		height: 100%;
	}
	#map_canvas { 
		height: 100%;
	}    
</style>
<!-- Start of first page -->
<div data-role="page" data-theme="d" id="contact_us" data-title="Contact Us">
	<div data-role="header" data-theme="d">
		<a href="index.php" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<h1>Contact Us</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<div id="map_canvas"></div>
		<p>Address: lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
		<p>Mobile: +639074147128</p>
	</div><!-- /content -->
	<?php include('footer_nav.php'); ?>
</div><!-- /page -->
</body>
</html>