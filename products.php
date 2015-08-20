<!DOCTYPE html>

<?php
  if(isset($_GET['cat'])){
    $category = $_GET['cat'];
  }else
    $category = "acids";

  if($category == "acids"){
    $productArr = ["Acetic Acid", "Ascorbic Acid", "Boric Acid", "Chromic Acid", "Citric Acid", "Hydrochloric Acid", "Muriatic Acid", "Nitric Acid", "Oleic Acid", "Oxalic Acid", "Phosphoric Acid", "Stearic Acid", "Sulfamic Acid", "Sulfuric Acid"];
  }else
    if($category == "biodiesel"){
    $productArr = ["Caustic Soda Beads", "Potassium Hydroxide", "Methanol"];
    }else
      if($category == "soapMaking"){
      $productArr = ["Caustic Soda Beads", "Potassium Hydroxide"];
      }else
         if($category == "compounding"){
         $productArr = ["Butyl", "Caustic Soda Beads", "EDTA - (Chelators)", "Phosphates", "Sodium Meta Silicate", "Surfactants"];
         }else
            if($category == "agriculture"){
            $productArr = ["Hydrogen Peroxide", "Glycerine", "Sulfuric Acid"];
            }else
               if($category == "foodIndustry"){
               $productArr = ["Ascorbic Acid", "Citric Acid", "Glycerine", "Sodium Bicarbonate", "Starch", "Xantham Gum"];
               }else
                  if($category == "generalManufacturing"){
                  $productArr = ["Acetone", "Contact Cleaner", "Lacquer Thinner"];
                  }else
                     if($category == "printChemicals"){
                      $productArr = ["Blanket and Roller Wash", "Isopropyl Alcohol", "Press Wash", "Rubber Rejuvinator"];
                     }else
                        if($category == "alcohols"){
                        $productArr = ["Ethyl Alcohol, Denatured", "Isobutyl Alcohol", "Isopropyl Alcohol", "Methanol", "Normal Butyl Alcohol", "Normal Propyl Alcohol"];
                        }else
                           if($category == "aliphaticSolvents"){
                           $productArr = ["142 Solvent", "Heptane", "Hexane", "Lacolene", "Low Odor Base Solvent", "Mineral Spirits", "VM&P Naphtha"];
                           }else
                              if($category == "alkalies"){
                              $productArr = ["Caustic Potash, 45%", "Caustic Potash, Flake", "Caustic Soda, 50%", "Caustic Soda, Beads", "Caustic Soda, Flakes", "Potassium Hydroxide", "Soda Ash, Dense", "Soda Ash, Light", "Sodium Bicarbonate", "Sodium Hydroxide"];
                              }else
                                 if($category == "amines"){
                                 $productArr = ["Diethanolamine", "Monoethanolamine", "Triethanolamine"];
                                 }else
                                    if($category == "ammoniumSalts"){
                                    $productArr = ["Ammonium Bicarbonate", "Ammonium Biflouride", "Ammonium Chloride", "Ammonium Persulfate", "Ammonium Hydroxide", "Aqua Ammonia"];
                                    }else
                                       if($category == "aromaticSolvents"){
                                       $productArr = ["Hi Sol 10", "Hi Sol 15", "Toluene", "Xylene"];
                                       }else
                                          if($category == "calciumSalts"){
                                          $productArr = ["Calcium Carbonate", "Calcium Chloride", "Calcium Hydroxide"];
                                          }else
                                             if($category == "bleachingAgents"){
                                             $productArr = ["Calcium Hypochlorite", "Hydrogen Peroxide", "Sodium Hypochlorite, 15%", "Sodium Percarbonate"];
                                             }else
                                                if($category == "chlorinatedSolvents"){
                                                $productArr = ["Methylene Chloride", "Perchloroethylene", "Trichloroethylene"];
                                                }else
                                                   if($category == "glycol"){
                                                   $productArr = ["Diethylene Glycol", "Dipropylene Glycol", "Ethylene Glycol", "Hexylene Glycol", "Inhibited Antifreeze", "Propylene Glycol"];
                                                   }else
                                                     if($category == "esterSolvents"){
                                                     $productArr = ["Amyl Acetate", "Dibasic Ester", "Ethyl Acetate", "Normal Propyl Acetate"];
                                                     }else
                                                        if($category == "ketones"){
                                                        $productArr = ["Acetone", "Methyl Amyl Ketone (MAK)", "Methyl Ethyl Ketone (MEK)", "Methyl Isobutyl Ketone (MIBK)"];
                                                        }else
                                                           if($category == "ketones"){
                                                           $productArr = ["Acetone", "Methyl Amyl Ketone (MAK)", "Methyl Ethyl Ketone (MEK)", "Methyl Isobutyl Ketone (MIBK)"];
                                                           }else
                                                              if($category == "potassiumSalts"){
                                                              $productArr = ["Potassium Carbonate", "Potassium Chloride", "Potassium Hydroxide"];
                                                              }else
                                                                 if($category == "metalSalts"){
                                                                 $productArr = ["Aluminum Sulfate", "Copper Sulfate", "Ferric Chloride", "Ferric Sulfate", "Ferrous Sulfate", "Magnesium Chloride", "Magnesium Sulfate", "Zinc Chloride"];
                                                                 }else
                                                                    if($category == "reagentGradeProducts"){
                                                                    $productArr = ["Acetic Acid", "Acetone", "Isopropyl Alcohol", "Methanol"];
                                                                    }else
                                                                       if($category == "otherChemicals"){
                                                                       $productArr = ["Glycerine", "Glycolic Acid", "Hydrogen Peroxide", "Lacquer Thinner", "Mineral Oil", "Silicone", "Surfactants", "Versene"];
                                                                       }else
                                                                        $productArr = ["Hydrogen Peroxide", "Glycerine", "Sulfuric Acid"];

?>

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
          <a href="products.php?cat=agriculture" class="list-group-item" <?php if($category == "agriculture"){echo "style = 'background-color: #bdbdbd'"; }?>>Agriculture</a>
          <a href="products.php?cat=alcohols" class="list-group-item" <?php if($category == "alcohols"){echo "style = 'background-color: #bdbdbd'"; }?>>Alcohols</a>
          <a href="products.php?cat=aliphaticSolvents" class="list-group-item" <?php if($category == "aliphaticSolvents"){echo "style = 'background-color: #bdbdbd'"; }?>>Aliphatic Solvents</a>
          <a href="products.php?cat=amines" class="list-group-item" <?php if($category == "amines"){echo "style = 'background-color: #bdbdbd'"; }?>>Amines</a>
          <a href="products.php?cat=ammoniumSalts" class="list-group-item" <?php if($category == "ammoniumSalts"){echo "style = 'background-color: #bdbdbd'"; }?>>Ammonium Salts</a>
          <a href="products.php?cat=aromaticSolvents" class="list-group-item" <?php if($category == "aromaticSolvents"){echo "style = 'background-color: #bdbdbd'"; }?>>Aromatic Solvents</a>
          <a href="products.php?cat=biodiesel" class="list-group-item" <?php if($category == "biodiesel"){echo "style = 'background-color: #bdbdbd'"; }?>>Biodiesel</a>
          <a href="products.php?cat=bleachingAgents" class="list-group-item" <?php if($category == "bleachingAgents"){echo "style = 'background-color: #bdbdbd'"; }?>>Bleaching Agents</a>
          <a href="products.php?cat=calciumSalts" class="list-group-item" <?php if($category == "calciumSalts"){echo "style = 'background-color: #bdbdbd'"; }?>>Calcium Salts</a>
          <a href="products.php?cat=chlorinatedSolvents" class="list-group-item" <?php if($category == "chlorinatedSolvents"){echo "style = 'background-color: #bdbdbd'"; }?>>Chlorinated Solvents</a>
          <a href="products.php?cat=compounding" class="list-group-item" <?php if($category == "compounding"){echo "style = 'background-color: #bdbdbd'"; }?>>Compounding</a>
          <a href="products.php?cat=esterSolvents" class="list-group-item" <?php if($category == "esterSolvents"){echo "style = 'background-color: #bdbdbd'"; }?>>Ester Solvents</a>
          <a href="products.php?cat=foodIndustry" class="list-group-item" <?php if($category == "foodIndustry"){echo "style = 'background-color: #bdbdbd'"; }?>>Food Industry</a>
          <a href="products.php?cat=glycol" class="list-group-item" <?php if($category == "glycol"){echo "style = 'background-color: #bdbdbd'"; }?>>Glycol</a>
          <a href="products.php?cat=generalManufacturing" class="list-group-item" <?php if($category == "generalManufacturing"){echo "style = 'background-color: #bdbdbd'"; }?>>General Manufacturing</a>
          <a href="products.php?cat=ketones" class="list-group-item" <?php if($category == "ketones"){echo "style = 'background-color: #bdbdbd'"; }?>>Ketones</a>
          <a href="products.php?cat=metalSalts" class="list-group-item" <?php if($category == "metalSalts"){echo "style = 'background-color: #bdbdbd'"; }?>>Metal Salts</a>
          <a href="products.php?cat=potassiumSalts" class="list-group-item" <?php if($category == "potassiumSalts"){echo "style = 'background-color: #bdbdbd'"; }?>>Potassium Salts</a>
          <a href="products.php?cat=printChemicals" class="list-group-item" <?php if($category == "printChemicals"){echo "style = 'background-color: #bdbdbd'"; }?>>Print Chemicals</a>
          <a href="products.php?cat=reagentGradeProducts" class="list-group-item" <?php if($category == "reagentGradeProducts"){echo "style = 'background-color: #bdbdbd'"; }?>>Reagent Grade Products</a>
          <a href="products.php?cat=soapMaking" class="list-group-item" <?php if($category == "soapMaking"){echo "style = 'background-color: #bdbdbd'"; }?>>Soap Making</a>
          <a href="products.php?cat=otherChemicals" class="list-group-item" <?php if($category == "otherChemicals"){echo "style = 'background-color: #bdbdbd'"; }?>>Other Chemicals</a>
        </div>
      </div>

      <div class="col-md-9">
<div class="row"><br /><br />
<p><h2>If you have found a product that you are interested in, or would like to make a special request, please <a href="contact.php">click here</a>.</h2></p>
                 <br />
              
                </div>
   
            <?php 
            for($i=0; $i<count($productArr); $i++){
            echo '<div class="col-sm-4 col-lg-4 col-md-4">
              <div class="thumbnail">
                <div class="caption">
                  <h4>'.$productArr[$i].'
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