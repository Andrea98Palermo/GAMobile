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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!-- 
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>My First Bootstrap 4 Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
-->

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


  
  <div class="container" style="max-width:100%">
    <img src="assets/carousel_3.jpg">
    <div class="big-text-block">
      <div class="text-in-block">
        <h5>Product/Offer</h5>
      </div>
      <div class="text-in-block">  
        <p>Altre informazioni sul prodotto</p>
      </div>
    </div>
  </div>
  <div class="container" style="max-width:100%">
    <img src="assets/carousel_2.jpg">
    <div class="big-text-block">
      <div class="text-in-block">
        <h5>Product/Offer</h5>
      </div>
      <div class="text-in-block">  
        <p>Altre informazioni sul prodotto</p>
      </div>
    </div>
  </div>
    


  <div class="row">
    <div class="flexcolumn">
      <div class="container">
        <img src="assets/carousel_1.jpg">
        <div class="small-text-block">
          <div class="text-in-block">
            <h5>Product/Offer</h5>
          </div>
          <div class="text-in-block">  
            <p>Altre informazioni sul prodotto</p>
          </div>
        </div>
      </div>
      <div class="container" >
        <img src="assets/carousel_2.jpg">
        <div class="small-text-block">
          <div class="text-in-block">
            <h5>Product/Offer</h5>
          </div>
          <div class="text-in-block">  
            <p>Altre informazioni sul prodotto</p>
          </div>
        </div>
      </div>
      <div class="container" >
        <img src="assets/carousel_3.jpg">
        <div class="small-text-block">
          <div class="text-in-block">
            <h5>Product/Offer</h5>
          </div>
          <div class="text-in-block">  
            <p>Altre informazioni sul prodotto</p>
          </div>
        </div>
      </div>
    </div>
    <div class="flexcolumn">
      <div class="container" >
        <img src="assets/carousel_1.jpg">
        <div class="small-text-block">
          <div class="text-in-block">
            <h5>Product/Offer</h5>
          </div>
          <div class="text-in-block">  
            <p>Altre informazioni sul prodotto</p>
          </div>
        </div>
      </div>
      <div class="container" >
        <img src="assets/carousel_2.jpg">
        <div class="small-text-block">
          <div class="text-in-block">
            <h5>Product/Offer</h5>
          </div>
          <div class="text-in-block">  
            <p>Altre informazioni sul prodotto</p>
          </div>
        </div>
      </div>
      <div class="container">
        <img src="assets/carousel_3.jpg">
        <div class="small-text-block">
          <div class="text-in-block">
            <h5>Product/Offer</h5>
          </div>
          <div class="text-in-block">  
            <p>Altre informazioni sul prodotto</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--
    <div class="row" >
      
        <div class="col-sm-8 ">
      
          <h2>About Me</h2>
          <h5>Photo of me:</h5>
          -->
          <!--
          <div style="padding:7px">
            <div class="fakeimg">Fake Image</div>
          </div>
          
          <div style="padding:7px"> 
            <div class="fakeimg">Fake Image</div>
          </div>
          -->
          <!--
          <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
          
          
          <h3>Some Links</h3>
          <p>Lorem ipsum dolor sit ame.</p>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <hr class="d-sm-none">
        
        </div>
      
        <div class="col-sm-4 ">
          <div style="padding:7px">
            <div class="fakeimg">Fake Image</div>
          </div>
          <div style="padding:7px">
            <div class="fakeimg">Fake Image</div>
          </div>
          -->
          <!--
          <h2>TITLE HEADING</h2>
          <h5>Title description, Dec 7, 2017</h5>
          
          <p>Some text..</p>
          <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          <br>
          <h2>TITLE HEADING</h2>
          <h5>Title description, Sep 2, 2017</h5>
          
          <p>Some text..</p>
          <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          
        </div>
    </div>
  -->

  <!--
  <div class="jumbotron text-center" style="margin-bottom:0">
    <p>Footer</p>
  </div>

  <div class="jumbotron text-center" style="margin-bottom:0">
    <div class="row">
      <div class="col-sm-4">
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  

  <div class="jumbotron text-center" style="margin-bottom:0 background-color:#48494a">
    <div class="row">
      <div class="col-sm-4">
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </div>


  <div style="background-color:#262626; height:1px; margin-top:30px; margin-left:20%; margin-right:20%;"></div>

  <div style="margin-bottom:30px; margin-top:20px;">
    <div class="flexrow" style="padding-right:10%; padding-left:25%;">
      <div class="column" style="flex:33%; text-align:left;">
        <h5>Sezione 1</h5>
        <div>
          <a href="#">Link 1<a>
        </div>
        <div>
          <a href="#">Link 2<a>
        </div>
        <div>
          <a href="#">Link 3<a>
        </div>
        <div>
          <a href="#">Link 4<a>
        </div>
      </div>
      <div class="column" style="flex:33%; text-align:left;">
        <h5>Sezione 2</h5>
        <div>
          <a href="#">Link 1<a>
        </div>
        <div>
          <a href="#">Link 2<a>
        </div>
        <div>
          <a href="#">Link 3<a>
        </div>
        <div>
          <a href="#">Link 4<a>
        </div>
      </div>
      <div class="column" style="flex:33%; text-align:left;">
        <h5>Sezione 3</h5>
        <div>
          <a href="#">Link 1<a>
        </div>
        <div>
          <a href="#">Link 2<a>
        </div>
        <div>
          <a href="#">Link 3<a>
        </div>
        <div>
          <a href="#">Link 4<a>
        </div>
      </div>
    </div>
  </div>
-->
  <?php 
    include 'footer.html'
  ?>


</body>
</html>
