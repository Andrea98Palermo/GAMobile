<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
    $(window).scroll(function(){
      var scrollval = window.pageYOffset;
      if(scrollval == 0){document.getElementById("bar").style.opacity = 1.0;}
      else{document.getElementById("bar").style.opacity = 0.7;}
    });
</script>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar fixed-top" id="bar">
  <a class="navbar-brand" href="index.php">GAMobile</a>
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
        <a class="nav-link" href="about_us.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contacts_assistance.php">Contacts & assistance</a>
      </li>

      <?php 
        if (! isset($_SESSION['session_id'])) {
            echo 
            '
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
            ';
        }
      ?>
      

    </ul>
  </div>  
</nav>
