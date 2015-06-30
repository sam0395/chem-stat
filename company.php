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

    

    <!-- Page Features -->
      
       <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive img-rounded" src="images/building.png" alt="">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <h1>We Are Chem-Stat!</h1>
                <p>Each employee at Chem-Stat makes customer service their top priority. The Chem-Stat name is constantly being built up through relations with many different private and public industries. It is our goal, here at Chem-Stat, to make sure the company is held high by all previous and future clients!</p>
                <a class="btn btn-primary btn-lg" href="contact.php">Contact Us!</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                   "Our goal is to provide our customers a service that is second to none within the chemical supply business."
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-6">
                <h2>Dynamic Solutions</h2>
                <p>Here at Chem-Stat, we provide solutions for: </p>
                <p>
                  Woodworking, 
                  Metal Fabricating,

                  Plating and Anodizing, 
                  Circuit Board Manufacturing,

                  Optical Industry, 
                  Heating and Cooling,

                  General Manufacturing, 
                  General Maintenance,

                  Service Industry
                  
                </p>
               
            </div>
            <!-- /.col-md-4 -->
           
            <!-- /.col-md-4 -->
            <div class="col-md-6">
                <h2>Our Thanks to YOU!</h2>
                <p>Thank you for choosing Chem-Stat as your supplier. We appreciate your business and your loyalty and look forward to a growing business relationship. If there are products that you are interested in that are not listed, please call and our customer service department will provide you with all the information needed for you purchase. We believe in prompt, courteous, and professional service.</p>
               
            </div>
            <!-- /.col-md-4 -->
        </div>
        <br />
    <!-- /page -->
</div>
</div>

<?php
include('footer.php');
?>

</body>
</html>