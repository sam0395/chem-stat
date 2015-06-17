<!DOCTYPE html>



<html>
<head>
  <title>Chem-Stat, Inc.&nbsp; Chemicals, Solvents and Environmental and Safety Assistance</title>
  <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="dist/css/style.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  
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
      zoom: 7,
      center: new google.maps.LatLng(28.028963, -81.633961)
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
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
  
 <?php
 include('nav.php');
 ?>

 <div id="home" class="col-md-12 header-image" id="main">
  
 </div>

 <div id="#about">
  
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
      <h1>
        Since 1991...</h1>
        <p>Our company has developed a reputation for quality service and customer satisfaction. It is this reputation that is offered to each and every customer with which we do business. We offer two day delivery service locally, and in most cases we can accommodate our customer within the next day at competitive prices. </p>
        
      </p>
    </header>

    <hr>

    <!-- Title -->
    <div class="row">
      <div class="col-lg-12">
        <h3>Our Staff</h3>
      </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-md-12 col-sm-24 hero-feature">
        <div class="thumbnail">
          
          <div class="caption">
            <h3>William Cusik</h3>
            <p></p>
            <p>
             <a href="#" class="btn btn-default">More Info</a>
           </p>
         </div>
       </div>
     </div>

     <div class="col-md-12 col-sm-24 hero-feature">
      <div class="thumbnail">
        
        <div class="caption">
          <h3>Tim Belcastro</h3>
          <p></p>
          <p>
           <a href="#" class="btn btn-default">More Info</a>
         </p>
       </div>
     </div>
   </div>

   <div class="col-md-12 col-sm-24 hero-feature">
    <div class="thumbnail">
     
      <div class="caption">
        <h3>Lori Cusik</h3>
        <p></p>
        <p>
         <a href="#" class="btn btn-default">More Info</a>
       </p>
     </div>
   </div>
 </div>

 <div class="col-md-12 col-sm-24 hero-feature">
  <div class="thumbnail">
    
    <div class="caption">
      <h3>John Reams</h3>
      <p></p>
      <p>
        <a href="#" class="btn btn-default">More Info</a>
      </p>
    </div>
  </div>
</div>

</div>
</div>
</div>

<?php
include('footer.php');
?>

</body>
</html>