<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


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
             <br />
           </p>
         </div>
       </div>
     </div>
   </header>

   <hr>

   <!-- Title -->
   <div class="row">
    <div class="col-lg-12 hidden-xs">
      <h3>Directions</h3>
    </div>
  </div>
  <!-- /.row -->

  <!-- Page Features -->
  <div class="col-md-12 map hidden-xs">
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