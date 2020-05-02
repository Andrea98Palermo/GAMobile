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
  <!-- 
  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
  </style>
  <style>
    .carousel-item,
    .carousel-inner,
    .carousel-inner img {
      height: 100%;
      width: 100%;
    }
  </style>
  <style>
    .carousel-item {
      text-align: center;
    }
  </style>
  <style>
    .carousel {
      height: 500px;
      width: auto;
    }
  </style>
  <style>
    body{
      height: 100vh;
      text-align: center;
    }
      /*Trigger Button*/
    .login-trigger {
      font-weight: bold;
      color: #fff;
      background: linear-gradient(to bottom right, #B05574, #F87E7B);
      padding: 15px 30px;
      border-radius: 30px;
      position: relative; 
      top: 50%;
    }

    /*Modal*/
    h4 {
      font-weight: bold;
      color: #fff;
    }
    .close {
      color: #fff;
      transform: scale(1.2)
    }
    .modal-content {
      font-weight: bold;
      background: linear-gradient(to bottom right,#F87E7B,#B05574);
    }
    .form-control {
      margin: 1em 0;
    }
    .form-control:hover, .form-control:focus {
      box-shadow: none;  
      border-color: #fff;
    }
    .username, .password {
      border: none;
      border-radius: 0;
      box-shadow: none;
      border-bottom: 2px solid #eee;
      padding-left: 0;
      font-weight: normal;
      background: transparent;  
    }
    .form-control::-webkit-input-placeholder {
      color: #eee;  
    }
    .form-control:focus::-webkit-input-placeholder {
      font-weight: bold;
      color: #fff;
    }
    .login {
      padding: 6px 20px;
      border-radius: 20px;
      background: none;
      border: 2px solid #FAB87F;
      color: #FAB87F;
      font-weight: bold;
      transition: all .5s;
      margin-top: 1em;
    }
    .login:hover {
      background: #FAB87F;
      color: #fff;
    }
  </style>
  -->
</head>
<body>

<!-- 
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>My First Bootstrap 4 Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">GAMobile</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Used & Refurbed</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Offers</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacts & assistance</a>
      </li>

      <li class="nav-item login-item">

        
        <a class="login-trigger" href="#" data-target="#login" data-toggle="modal">Login</a>

        <div id="login" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <button data-dismiss="modal" class="close">&times;</button>
                <h4>Login</h4>
                <form method="POST" action="./php/login.php">
                  <input type="text" name="username" class="username form-control" placeholder="Username" required/>
                  <input type="password" name="password" class="password form-control" placeholder="password" required/>
                  <input class="btn login" type="submit" value="Login" name="login"/>
                </form>
                <h5>Not Registered? <a class="nav-link" href="register.html">Click here</a> to Register</h5>
              </div>
            </div>
          </div>  
        </div>

      </li> 

    </ul>
  </div>  
</nav>
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

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">Fake Image</div>
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
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

<!--
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

<footer display= block>
  <p>Posted by: Hege Refsnes</p>
  <p>Contact information: <a href="mailto:someone@example.com">
  someone@example.com</a>.</p>
</footer>
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
