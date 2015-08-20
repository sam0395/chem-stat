
<html> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <link rel="shortcut icon" href="images/littleglobe.ico">
  <title>Chem-Stat, Inc.&nbsp; Chemicals, Solvents and Environmental and Safety Assistance</title>

  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="dist/css/style.css">
	
  <script type="text/javascript" src="dist/js/jquery.js"></script>
  <script type="text/javascript" src="dist/js/bootstrap.js"></script>

   <script src="dist/js/smooth-scroll.min.js"></script>
 


  <script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwW1b8Kj3xxjxE7aEeCvAAbMRpoN1rJOA">
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp">
  </script>
  <script>
  var directionsDisplay;
  var directionsService = new google.maps.DirectionsService();

  function initialize() {
    directionsDisplay = new google.maps.DirectionsRenderer();
    var mapOptions = {
      zoom: 10,
      center: new google.maps.LatLng(27.985136,-82.514739)
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

    var marker = new google.maps.Marker({
                position: map.getCenter(),
                map: map
              });

    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById('directions-panel'));

    var control = document.getElementById('control');
    control.style.display = 'block';
    map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);
  }

  function calcRoute() {
    var start = document.getElementById('start').value;
    var end = document.getElementById('end').value;
    var request = {
      origin: start,
      destination: end,
      travelMode: google.maps.TravelMode.DRIVING
    };
    directionsService.route(request, function(response, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
      }
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);

  </script>


</head>

<body>

<body>

<nav data-scroll-header id="navbar" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Chem-Stat Online</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse navbar-right">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="company.php">Company</a></li>
        <li><a href="contact.php">Contact</a></li>

      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<script type="text/javascript">
$(function() {

  smoothScroll.init({
    speed: 500,
    easing: 'easeInOutCubic'
  });

  $(window).on('scroll', function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > 70) {
      $('#navbar').addClass('animate-navbar');
    }else {
      $('#navbar').removeClass('animate-navbar');
    }
  });
});


</script>
