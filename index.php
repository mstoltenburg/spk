<!DOCTYPE html>
<html lang="de">

<?php include 'include/config.inc.php'; $BASE_URL = ''; ?>

<head>
	<?php include $BASE_URL . 'include/snippets/head.inc.php'; ?>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">

	function initialize() {
		var office = new google.maps.LatLng(52.5057,13.3270);

		var mapOptions = {
			mapTypeControl: false,
			center: office,
			zoom: 16,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		var map = new google.maps.Map(document.getElementById("map"), mapOptions);

		var marker = new google.maps.Marker({
			draggable: true,
			position: office,
			map: map,
			title: 'Click to zoom'
		});

		google.maps.event.addListener(marker, 'dragend', dragend);

	}

	function dragend() {
		console.log(this.getPosition());
		this.setTitle(this.getPosition().toString());

	}

	google.maps.event.addDomListener(window, 'load', initialize);

	</script>
</head>

<body>
	<?php include $BASE_URL . 'include/snippets/header.inc.php'; ?>

	<div id="content" class="map">
		<div id="map"></div>
		<div class="shadow_top"></div>
		<div class="shadow_bottom"></div>
	</div>

	<?php include $BASE_URL . 'include/snippets/global.inc.php'; ?>

	<?php include $BASE_URL . 'include/snippets/footer.inc.php'; ?>

</body>

</html>
