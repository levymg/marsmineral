<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php if (isset($description)) { echo $description; } ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
<?php 
$keywords = '';
?>
<meta name="keywords" content="<?php if (isset($keywords)) { echo $keywords; } ?>" />
<title>Mars Mineral - Agitation Agglomeration Equipment<?php if(isset($title)) { echo ' - '.$title; } ?></title>
<link type="text/css" href="styles/reset.css" rel="stylesheet" media="screen" />
<link type="text/css" rel="stylesheet" media="only screen and (min-width: 569px), only screen and (min-device-width: 569px)" href="styles/basic.css" />
<link type="text/css" rel="stylesheet" media="only screen and (max-width: 568px), only screen and (max-device-width: 568px)" href="styles/small-device.css" />
<link type="text/css" rel="stylesheet" media="only screen and (max-width: 568px), only screen and (max-device-width: 568px)" href="styles/responsive-nav.css" />
<link type="text/css" rel="stylesheet" href="styles/colorbox.css" media="screen" />
<link type="text/css" rel="stylesheet" href="styles/print.css" media="print" />
<!--[if lt IE 9]>
   <link type="text/css" rel="stylesheet" media="screen" href="styles/basicie8.css" />
<![endif]-->
<script src="scripts/responsive-nav.js"></script>
<script src="http://code.jquery.com/jquery-1.8.0.js"></script>
<script type="text/javascript" src="scripts/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="scripts/main.js"></script>

<?php if (substr($_SERVER['PHP_SELF'], -8) == "reps.php") { ?>
    <script src="scripts/jquery.vector-map.js" type="text/javascript"></script>
    <script src="scripts/usa-en.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(function(){
        $('#repmap').vectorMap({
            map: 'usa_en', 
            color: '#396c72',
            hoverColor: '#fead28',
            backgroundColor: '#ffffff', 
            onRegionClick: showLocation
        });
    });
    </script>
    <script src="scripts/reps.js"></script>
<?php } ?>

<?php if (substr($_SERVER['PHP_SELF'], -14) == "directions.php") { ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNq-M2daSfiIYTqUcUKxX3cmMcgnobQyQ&sensor=false"></script>
<script>
  var directionDisplay;
  var directionsService = new google.maps.DirectionsService();

  function initialize() {
	directionsDisplay = new google.maps.DirectionsRenderer();
	var mapOptions = {
	  zoom: 7,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById('map_canvas'),
		mapOptions);
	directionsDisplay.setMap(map);
	directionsDisplay.setPanel(document.getElementById('directions-panel'));
	
	var start = '<?php echo $loc1; ?>';
	var end = '128 Myoma Rd, Mars, PA 16046';
	var request = {
	  origin: start,
	  destination: end,
	  travelMode: google.maps.DirectionsTravelMode.DRIVING
	};
	directionsService.route(request, function(response, status) {
	  if (status == google.maps.DirectionsStatus.OK) {
		directionsDisplay.setDirections(response);
	  }
	});
	
	var control = document.getElementById('control');
	control.style.display = 'block';
	map.controls[google.maps.ControlPosition.TOP].push(control);
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php } ?>
<script src="scripts/gen_validatorv4.js" type="text/javascript" xml:space="preserve"></script>
</head>
<body<?php if (substr($_SERVER['PHP_SELF'], -14) == "directions.php") { ?> onLoad="initialize()"<?php } ?>>
<img src="images/mars-mineral-logo-bw.jpg" class="printonly">
<div id="header">
    <a href="index.php"><img src="images/mars-mineral-logo.jpg" alt="Mars Mineral Logo" id="logo" /></a>
    <div id="tagline">The leader in agitation agglomeration &mdash;<br>the conversion of fine powders and dusts<br>into spherical pellets.</div>
</div>

<div id="nav">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="why-pelletize.php">Why Pelletize</a></li>
        <li><a href="equipment-and-systems.php">Equipment &amp; Systems</a></li>
        <li><a href="test-options.php">Test Options</a></li>
        <li><a href="tech-papers.php">Tech Papers</a></li>
        <li><a href="reps.php">Reps</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</div><!--main-nav-->
        
<div class="clearfix"></div>
