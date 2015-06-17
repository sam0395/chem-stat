<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">

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

  <div class="container">
   
    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
      <h1>Contact Information: </h1>
      <div class="row text-center">
        

        <div class="col-md-4 col-sm-8 hero-feature">
          <div class="thumbnail">
            
            <div class="caption">
              <h3>Address</h3>
              <p></p>
              <p>
               4613 North Thatcher Ave.<br />
               Tampa, FL 33614<br />
               <br />
               <br />
             </p>
           </div>
         </div>
       </div>

       <div class="col-md-4 col-sm-8 hero-feature">
        <div class="thumbnail">
          
          <div class="caption">
            <h3>Telephone</h3>
            <p></p>
            <p>
              <b>Local:</b> 813-870-2436<br /> 
              <b>Toll Free:</b> 800-428-6304<br />
              <b>Fax:</b> 813-877-6341<br />
              <br />
            </p>
          </div>
        </div>
      </div>


      <div class="col-md-4 col-sm-8 hero-feature">
        <div class="thumbnail">
          
          <div class="caption">
            <h3>Email</h3>
            <p></p>
            <p>
             <b>tim</b>@chem-stat.com<br />
             <b>bill</b>@chem-stat.com<br />  
             <b>lori</b>@chem-stat.com<br />
             <b>john</b>@chem-stat.com<br />
           </p>
         </div>
       </div>
     </div>
   </header>

   <hr>

   <!-- Title -->
   <div class="row">
    <div class="col-lg-12">
      <h3>Directions</h3>
    </div>
  </div>
  <!-- /.row -->

  <!-- Page Features -->
  <div class="col-md-12 map">
    <div id="control">
      <strong>Start:</strong>
      <input id="start" value="">
      <strong>End:</strong>
      <input id="end" value="4613 North Thatcher Ave.
      Tampa, FL 33614">
      <button onclick="calcRoute()">Get Directions</button>
    </div>
    
    <div id="directions-panel"></div>
    <div id="map-canvas"></div>

  </div>

</div>


</div>

<?php
include('footer.php');
?>

</body>

</html>