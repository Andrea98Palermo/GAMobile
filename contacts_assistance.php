<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>contacts_assistance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
<body>

<?php 
  include 'navbar.php'
?>

<!--
<div class="card bg-dark text-white">
  <img src="https://source.unsplash.com/random" class="card-img" alt="">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>
  </div>
</div>


<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Secondary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Danger card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Light card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Dark card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<div data-spy="scroll" data-target="#navbar-example3" data-offset="0">
  <h4 id="item-1">Item 1</h4>
  <p>...</p>
  <h5 id="item-1-1">Item 1-1</h5>
  <p>...</p>
  <h5 id="item-1-2">Item 1-2</h5>
  <p>...</p>
  <h4 id="item-2">Item 2</h4>
  <p>...</p>
  <h4 id="item-3">Item 3</h4>
  <p>...</p>
  <h5 id="item-3-1">Item 3-1</h5>
  <p>...</p>
  <h5 id="item-3-2">Item 3-2</h5>
  <p>...</p>
</div>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="assets/carousel_1.jpg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item active">
      <img src="assets/carousel_2.jpg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="assets/carousel_1.jpg" class="d-block w-100" alt="">
    </div>
  </div>
</div>
            -->

<section class="cover cover--single">
<div class="cover__caption__filter"></div>
  <div class="cover__caption">
    <div class="cover__caption__copy">
    <h1>Assistenza</h1>
    <h2>.......</h2>
    <a href="" class="button">chiamate...</a>
    </div>
  </div>
</section>

<section class="cards clearfix">
  <div class="card">
    <img class="card__image" src="https://source.unsplash.com/random/400x260" alt="Nature">
       <div class="card__copy">
          <h3>Assistenza in generale</h3>
          <h6>per sapere di pi...</h6>
      </div>
    </div>
    <div class="card">
    <img class="card__image" src="https://source.unsplash.com/random/400x260" alt="Nature">
       <div class="card__copy">
          <h3>Assistenza telefonica</h3>
          <h6>per sapere di pi...p</h6>
      </div>
    </div>
    <div class="card">
    <img class="card__image" src="https://source.unsplash.com/random/400x260" alt="Nature">
       <div class="card__copy">
          <h3>Assistenza sull usato</h3>
          <h6>per sapere di pi...</h6>
      </div>
    </div>
</section>


<section class="banner clearfix">
  <div class="banner__image"></div>
  <div class="banner__copy">
    <div class="banner__copy__text">
      <h3>Assistenza in generale</h3>
      <p>bla bla bla bbbb abbaauuaaan</p>
    </div>
  </div>
</section>

<section class="banner clearfix">
  <div class="banner__copy">
    <div class="banner__copy__text">
      <h3>Assistenza telefonica</h3>
      <p>bla bla bla bbbb abbaauuaaan</p>
    </div>
  </div>
  <div class="banner__image"></div>
</section>

<section class="banner clearfix">
  <div class="banner__image"></div>
  <div class="banner__copy">
    <div class="banner__copy__text">
      <h3>Assistenza sull usato</h3>
      <p>bla bla bla bbbb abbaauuaaan</p>
    </div>
  </div>
</section>

<!--
<div class="container-fluid">
    <div class="row big-padding">
        <div class="col-sm-6 col-sm-offset-2">
        <img src="assets/carousel_1.jpg" alt="" class="img-thumbnail">
        </div>
        <div class="col-sm-4 col-sm-offset-2">
            <h3>Titolo assistenza</h3>
            <p>bla bla bla v bla bla bla v  bla bla bla v vbla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla bla </p>
        </div>
    </div>
    
    <hr>

    <div class="row big-padding">
        <div class="col-sm-6 col-sm-offset-2">
            <h2>Titolo assist.</h2>
            </p>bla bla bla v bla bla bla v  bla bla bla v vbla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla bla</p>
        </div>
        <div class="col-sm-4 col-sm-offset-2">
        <img src="assets/carousel_2.jpg" alt="" class="img-thumbnail">
        </div>
    </div>

</div>
-->

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



</body>
</html>
