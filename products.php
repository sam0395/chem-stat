<!DOCTYPE html>

<?php
  if(isset($_GET['cat'])){
    $category = $_GET['cat'];
  }else
    $category = "acids";

  if($category == "acids"){
    $productArr = ["Hydrogen Peroxide", "Glycerine", "Sulfuric Acid"];
  }else
    if($category == "biodeisel"){
    $productArr = ["Caustic Soda Beads", "Potasium Hydroxide", "Methanol"];
    }else
      if($category == "soapMaking"){
      $productArr = ["Caustic Soda Beads", "Potassium Hydroxide"];
      }else
         if($category == "compounding"){
         $productArr = ["Butyl", "Caustic Soda Beads", "EDTA - (Chelators)", "Phosphates", "Sodium Meta Silicate", "Surfactants"];
         }else
      $productArr = ["Hydrogen Peroxide", "Glycerine", "Sulfuric Acid"];

?>

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


</head>

<body>

 <?php
 include('nav.php');
 ?>

 <div id="home" class="col-md-12 header-image" id="main">

 </div>

 <div id="#about">

   <div class="container">



    <div class="row">

      <div class="col-md-3">
        <p class="lead">Chem-Stat Products</p>
        <div class="list-group">
          <a href="products.php?cat=acids" class="list-group-item" <?php if($category == "acids"){echo "style = 'background-color: #bdbdbd'"; }?>>Acids</a>
          <a href="#" class="list-group-item">Agriculture</a>
          <a href="#" class="list-group-item">Alcohols</a>
          <a href="#" class="list-group-item">Aliphatic Solvents</a>
          <a href="#" class="list-group-item">Amines</a>
          <a href="#" class="list-group-item">Ammonium Salts</a>
          <a href="#" class="list-group-item">Aromatic Solvents</a>
          <a href="products.php?cat=biodeisel" class="list-group-item" <?php if($category == "biodeisel"){echo "style = 'background-color: #bdbdbd'"; }?>>Biodeisel</a>
          <a href="#" class="list-group-item">Bleaching Agents</a>
          <a href="#" class="list-group-item">Calcium Salts</a>
          <a href="#" class="list-group-item">Chlorinated Solvents</a>
          <a href="products.php?cat=compounding" class="list-group-item" <?php if($category == "compounding"){echo "style = 'background-color: #bdbdbd'"; }?>>Compounding</a>
          <a href="#" class="list-group-item">Ester Solvents</a>
          <a href="#" class="list-group-item">Food Industry</a>
          <a href="#" class="list-group-item">Glycol</a>
          <a href="#" class="list-group-item">General Manufacturing</a>
          <a href="#" class="list-group-item">Ketones</a>
          <a href="#" class="list-group-item">Metal Salts</a>
          <a href="#" class="list-group-item">Potassium Salts</a>
          <a href="#" class="list-group-item">Print Chemicals</a>
          <a href="#" class="list-group-item">Reagent Grade Products</a>
          <a href="products.php?cat=soapMaking" class="list-group-item" <?php if($category == "soapMaking"){echo "style = 'background-color: #bdbdbd'"; }?>>Soap Making</a>
        </div>
      </div>

      <div class="col-md-9">

         <div class="row">

                 

                </div>

          <div class="row">
            <?php 
            for($i=0; $i<count($productArr); $i++){
            echo '<div class="col-sm-4 col-lg-4 col-md-4">
              <div class="thumbnail">
                <div class="caption">
                  <h4><a href="#">'.$productArr[$i].'</a>
                  </h4>
                </div>
              </div>
            </div>';
            
          }
            ?>

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