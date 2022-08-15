<!DOCTYPE html>
<html lang="en">

  <head>


    <link rel='stylesheet' type='text/css' href='application/css/x3dom.css'></link>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Fonts used-->
    <script src="application/fonts/fontawesome.js" crossorigin="anonymous"></script>
    <link href='application/fonts/opensans.css' rel='stylesheet' type='text/css'>
    <link href='application/fonts/oswald.css' rel='stylesheet' type='text/css'> 

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="application/css/bootstrap.min.css">
  <link rel="stylesheet" href="application/css/custom.css">

    <title>Hello, world!</title>
  </head>
  <body> 

    <!--Logo and navigation bar-->
  <div id="headerColor">
    <nav class="navbar navbar-expand-sm navbar_coca_cola">
        <!-- Brand -->
        <div class="logo">
          <a class="navbar-brand" href="#">
          <h1>1</h1>
          <h1>oca</h1>
          <h2>Cola</h2>
          <h3>&#128512;</h3>
          <p>Have a coke and a smile </p>
          </a>
          </div>

        <!--Collapsible Navbar Menu Icon-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="navbar-toggler-icon"></span>
        </button>      
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <!-- Links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a id="navAbout" class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a id="navModels" class="nav-link"  href="#" >Models</a>
        </li>
        <li>
            <a class="nav-link" href="https://github.com/hs498/3Dapp.git/">Github</a>
        </li>
    
        </ul>

      </div>
      </nav>
    </div>
      <br>

  <div id="bodyColor">
    <div class="container-fluid main_contents">
    <div id="home">  
      <div class="row">
          <div class="col-sm-12">
            
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-interval="4000">
                  <img class="imgBox d-block w-100" src='../assignment/application/assets/images/<?php echo $coke_can_image?>.jpg'>
                </div>
                <div class="carousel-item" data-interval="4000">
                <img class="imgBox d-block w-100" src='../assignment/application/assets/images/<?php echo $coca_cola_image?>.jpg'>
                </div>
                <div class="carousel-item"data-interval="4000">
                <img class="imgBox d-block w-100" src='../assignment/application/assets/images/<?php echo $coke_box_image?>.jpg'>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            
          </div>
      </div>

      
      <div class="card text-white bg-info mb-3" style="text-align:center">
      <br>
      <h4>This is the coca-cola 2016 commercial. Click play to watch.</h4>
      <p style="text-align:center">
          <iframe src="https://www.youtube.com/embed/6W5pqlbh5sQ"
          width="500" height="282" frameborder="0" allowfullscreen></iframe>
        </p>
      </div>

      
        <br>
        <!--row of cards on the grid-->
        <div class="row">
          <!--coca cola column-->
            <div class="col-sm-4">
              <div class="card text-white bg-info mb-3">
                <img class="imgBox" src='../assignment/application/assets/images/<?php echo $coke_image?>.jpg'>
              </a>
              <div class="card-body">
                  <div id="title_left" class="card-title drinksText"></div>
                  <div id="subTitle_left" class="card-subtitle drinksText"></div>
                  <div id="description_left" class="card-text drinksText"></div>   
                  <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Find out more ...</a>          
              </div>
              </div>
            </div>

          <!--sprite column-->
          <div class="col-sm-4">
            <div class="card text-white bg-info mb-3">
                <img class="imgBox" src='../assignment/application/assets/images/<?php echo $sprite_image?>.jpg'>
            </a>
            <div class="card-body">
                <div id="title_centre" class="card-title drinksText"></div>
                <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                <div id="description_centre" class="card-text drinksText"></div>   
                <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Find out more ...</a>
              </div>
            </div>
          </div>   
          
          <!--dr pepper column-->
          <div class="col-sm-4">
            <div class="card text-white bg-info mb-3">
            <img class="imgBox" src='../assignment/application/assets/images/<?php echo $pepper_image?>.jpg'>
            </a>
            <div class="card-body">
                <div id="title_right" class="card-title drinksText"></div>
                <div id="subTitle_right" class="card-subtitle drinksText"></div>
                <div id="description_right" class="card-text drinksText"></div>   
                <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responsive">Find out more ...</a>
              </div>
            </div>
          </div>      
        </div>


        <div class="card text-white bg-info mb-3" style="text-align:center">
          <br>
          <h4>This is the coca-cola theme music, click the play button to listen!</h4>
          <p style="text-align:center">
          <audio src="application/assets/music/Coca-Cola – “Taste The Feeling” ft. 2Baba & Yemi Alade.mp3" controls></audio>
          <p></p>
        </div>
      </div><!--End home page-->
    
      
      <!-- About page block element -->
      <div id="about" >
      This website has been created by H J Smith<br>
      Candidate Number: 215726<br>
      Module: Web 3D Applications
      <br><br>
      Deeper Understanding Features:
      <p>
      1. Added video asset to home page<br>
      2. Added theme music to home page<br>
      3. Changed logo<br>
      4. Added carousel to home page<br>
      </p>
      </div> <!-- End home page -->


    <div id="models">
      <div class="row">
        <div class="col-sm-8">
          <div class="card text-left">
            <div class = "card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a id="navCoke" class="nav-link" href="#">Coke</a>
                  </li>
                  <li class="nav-item">
                  <a id="navSprite" class="nav-link" href="#">Sprite</a>
                  </li>
                  <li class="nav-item">
                  <a id="navPepper" class="nav-link" href="#">Pepper</a>
                  </li>
              </ul>
            </div>

            <div class="card-body">
              <div id="coke" style="display: none;">
                <div id =x3dModelTitle_coke class="card-title drinksText"></div>
                <div class="model3D">
                  <x3d>
                    <scene>
                      <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url='../assignment/application/assets/x3d/<?php echo $coke_3d_model?>.x3d'>
                         </inline>
                    </scene>
                  </x3d>
                </div>
                <div id =x3dCreationMethod_coke class="card-text drinksText"></div>
              </div>  

              <div id="sprite" style="display: none;">
                <div id =x3dModelTitle_sprite class="card-title drinksText"></div>
                <div class="model3D">
                  <x3d>
                    <scene>
                      <inline inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url='../assignment/application/assets/x3d/<?php echo $sprite_3d_model?>.x3d'> </inline>
                    </scene>
                  </x3d>
                </div>
                <div id =x3dCreationMethod_sprite class="card-text drinksText"></div>
              </div>  
              
              <div id="pepper" style="display: none;">
                <div id =x3dModelTitle_pepper class="card-title drinksText"></div>
                <div class="model3D">
                  <x3d>
                    <scene>
                      <inline inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url='../assignment/application/assets/x3d/<?php echo $pepper_3d_model?>.x3d'> </inline>
                    </scene>
                  </x3d>
                </div>
        
                <!--X3D code-->
                <div id =x3dCreationMethod_pepper class="card-text drinksText"></div>
              </div>  

            </div>

          </div>
        </div>

        <div class="col-sm-3">
          <div class="card text-left">
            <div class="card-header gallery-header">Gallery </div>
              <div class="card-body">
                <div class="card-title title_gallery drinksText"></div>
                <div class="gallery" id="gallery"></div>
                    <img class="imgBox" src='../assignment/application/assets/images/gallery_images/<?php echo $coke_logo?>.png' width=75px>
                    <img class="imgBox" src='../assignment/application/assets/images/gallery_images/<?php echo $coke_bottle?>.jpg' width=75px>
                    <img class="imgBox" src='../assignment/application/assets/images/gallery_images/<?php echo $sprite_bottle?>.jpg' width=75px>
                    <img class="imgBox" src='../assignment/application/assets/images/gallery_images/<?php echo $sprite_logo?>.png'width=75px>
                    <img class="imgBox" src='../assignment/application/assets/images/gallery_images/<?php echo $pepper_logo?>.jpg'width=75px>
                    <img class="imgBox" src='../assignment/application/assets/images/gallery_images/<?php echo $pepper_bottle?>.jpeg' width=75px>
                <div class="card-text description_gallery drinksText"></div>
              </div> 
          </div>
      </div>
      </div>
    </div>

    <div id="interaction" class="row" >
      <!-- Column for the camera view controls -->
      <div class="col-sm-4">
          <div class="card text-left">


            </div>
      </div>
      <!-- Column for the animation controls -->
      <div class="col-sm-4">
          <div class="card text-left">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Animation</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="card-Title x3dAnimationSubtitle drinksText">
                  <h3>Animation Options</h3>
                </div>
                <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">RotX</a>
                <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                <div class="card-text x3dAnimationDescription drinksText">
                    <p>These buttons allow rotation and stopping of rotation.</p>
                </div>
              </div>
            </div>
      </div>


</div> <!-- End the interaction panels -->


<div id="cokeDescription" class="row" >
  <div class="col-sm-12">
      <div class="card">
          <div class="card-body">
              <div id="title_coke" class="card-title drinksText"></div>
              <div id="subTitle_coke" class="card-subtitle drinksText"></div>
              <div id="description_coke" class="card-text drinksText"></div>   
              <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>                 
          </div>
      </div>
  </div>
</div> <!-- End coke description contents -->

<!-- Row to hold one card to hold the sprite descriptive text, etc.-->
<div id="spriteDescription" class="row" >
  <div class="col-sm-12">
      <div class="card">
          <div class="card-body">
              <div id="title_sprite" class="card-title drinksText"></div>
              <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
              <div id="description_sprite" class="card-text drinksText"></div>  
              <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>                 
          </div>
      </div>
  </div>
</div> <!-- End sprite description contents -->

<!-- Row to hold one card to hold the pepper descriptive text, etc.-->
<div id="pepperDescription" class="row" >
  <div class="col-sm-12">
      <div class="card">
          <div class="card-body">
              <div id="title_pepper" class="card-title drinksText"></div>
              <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
              <div id="description_pepper" class="card-text drinksText"></div>  
              <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper</a>                 
          </div>
      </div>
  </div>
</div> <!-- End pepper description contents -->  








    <!--Footer-->
  <div id="footerColor">
  <nav class="navbar navbar-expand-sm footer">
    <nav class="navbar navbar-expand-sm footer">
      <div class="container-fluid">
        <div class="navbar-text float-left copyright">
          <p><span class="align-baseline"> <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
      </div>
      
        <div class="navbar-text float-right social">
          <a href="#"><i class="fab fa-facebook-square fa-2x" style="font-size:20px;color:red;"></i></a>
          <a href="#"><i class="fab fa-twitter fa-2x" style="font-size:20px;color:green;"></i></a>          
          <a href="#"><i class="fab fa-google-plus fa-2x"style="font-size:20px;color:blue;"></i></a>
          <a href="#"><i class="fab fa-github-square fa-2x"style="font-size:20px;color:yellow;"></i></a> 
        </div>
      </div>
    </nav> 
  </div>  
  



     <script src="application/scripts/js/jquery-3.4.1.js"></script>
     <script src="application/scripts/js/bootstrap.min.js"></script>
     <script src="application/scripts/js/x3dom.js"></script>
     <script src="application/scripts/js/custom.js" crossorigin="anonymous"></script>
     <script src="application/scripts/js/swap_restyle.js"></script>
     <script src ="application/scripts/js/getJsonData.js"></script>
     <script src="application/scripts/js/modelInteractions.js"></script>
  </body>
</html>

<?php
// You can define any configuration variables here

// Display error message cause by your PHP scripts
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors',1);

// The require or include statement takes all the text/code/markup that exists 
// in the specified file and copies it into the file that uses the include (or require) statement.
require 'application/mvc.php';
?>