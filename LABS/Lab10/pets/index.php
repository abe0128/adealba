<?php

    include 'inc/header.php';
    include 'pixabayAPI.php';

?>
<?php
  $backgroundImage = "img/sea.jpg";
    
  if (isset($_GET['keyword'])) { //if form was submitted
      
      include 'pixabayAPI.php';
      
      echo "<h3>You searched for " . $_GET['keyword'] . "</h3>";
      
      $orientation = "horizontal";
      $keyword = $_GET['keyword'];
      
      if(isset($_GET['layout']))
      {
        $orientation = $_GET['layout'];
      }
      
      if(!empty($_GET['category']))
      {
          $keyword = $_GET['category'];
      }
      
      $imageURLs = getImageURLs($keyword, $orientation);
      
      //$backgroundImage = $imageURLs[rand(0, count($imageURLs)-1];
      $backgroundImage = $imageURLs[array_rand($imageURLs)];
      
      //print_r($imageURLs);
      
  }
 
?>
        
        <!-- Add carousel here -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="alex.jpg" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="<?=$imageURLs[0]?>" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?=$imageURLs[1]?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?=$imageURLs[2]?>" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?=$imageURLs[3]?>" alt="Fourth slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?=$imageURLs[4]?>" alt="Fifth slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?=$imageURLs[5]?>" alt="Sixth slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?=$imageURLs[6]?>" alt="Seventh slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
        
        
        <br>
        
        <a href="pets.php" class="btn btn-outline-primary" role="button" aria-pressed="true"> Adopt Now!</a>
        
        <br>
        
<?php

    include 'inc/footer.php';

?>