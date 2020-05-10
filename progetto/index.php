<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>GAMobile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <?php 
      include 'navbar.php'
    ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="assets/carousel_1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/carousel_2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/carousel_3.jpg" alt="Third slide">
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


      <div class="colonna-flex-grande">
        <div class="container">
          <img src="assets/carousel_3.jpg">
          <div class="blocco-testo centrato-orizzontale">
            <div class="testo-in-blocco">
              <b class="testo-primario-chiaro">Product / Offer</b>
            </div>
            <div class="testo-in-blocco">  
              <p class="testo-secondario-chiaro">Altre informazioni sul prodotto</p>
            </div>
          </div>
        </div>
        <div class="container">
          <img src="assets/carousel_2.jpg">
          <div class="blocco-testo centrato-orizzontale">
            <div class="testo-in-blocco">
                <b class="testo-primario-chiaro">Product / Offer</b>
            </div>
            <div class="testo-in-blocco">  
              <p class="testo-secondario-chiaro">Altre informazioni sul prodotto</p>
            </div>
          </div>
        </div>
      </div> 
          

      <div id="principale">
        <div class="row">
          <div class="colonna-flex-piccola">
            <div class="container">
              <img src="assets/carousel_1.jpg">
              <div class="blocco-testo centrato-orizzontale">
                <div id="test" class="testo-in-blocco">
                  <span class="testo-primario-chiaro">Product / Offer</span>
                </div>
                <div class="testo-in-blocco">  
                  <p class="testo-secondario-chiaro">Altre informazioni sul prodotto</p>
                </div>
              </div>
            </div>
            <div class="container" >
              <img src="assets/carousel_2.jpg">
              <div class="blocco-testo centrato-orizzontale">
                <div class="testo-in-blocco">
                  <b class="testo-primario-chiaro">Product / Offer</b>
                </div>
                <div class="testo-in-blocco">  
                  <p class="testo-secondario-chiaro">Altre informazioni sul prodotto</p>
                </div>
              </div>
            </div>
            <div class="container" >
              <img src="assets/carousel_3.jpg">
              <div class="blocco-testo centrato-orizzontale">
              <div class="testo-in-blocco">
                <b class="testo-primario-chiaro">Product / Offer</b>
                </div>
                <div class="testo-in-blocco">  
                  <p class="testo-secondario-chiaro">Altre informazioni sul prodotto</p>
                </div>
              </div>
            </div>
          </div>
          <div class="colonna-flex-piccola">
            <div class="container" >
              <img src="assets/carousel_1.jpg">
              <div class="blocco-testo centrato-orizzontale">
                <div class="testo-in-blocco">
                  <b class="testo-primario-chiaro">Product / Offer</b>
                </div>
                <div class="testo-in-blocco">  
                  <p class="testo-secondario-chiaro">Altre informazioni sul prodotto</p>
                </div>
              </div>
            </div>
            <div class="container" >
              <img src="assets/carousel_2.jpg">
              <div class="blocco-testo centrato-orizzontale">
                <div class="testo-in-blocco">
                  <b class="testo-primario-chiaro">Product / Offer</b>
                </div>
                <div class="testo-in-blocco">  
                  <p class="testo-secondario-chiaro">Altre informazioni sul prodotto</p>
                </div>
              </div>
            </div>
            <div class="container">
              <img src="assets/carousel_3.jpg">
              <div class="blocco-testo centrato-orizzontale">
                <div class="testo-in-blocco">
                  <b class="testo-primario-chiaro">Product / Offer</b>
                </div>
                <div class="testo-in-blocco">  
                  <p class="testo-secondario-chiaro">Altre informazioni sul prodotto</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <?php 
        include 'footer.html'
      ?>
  
</div>

</body>

</html>
