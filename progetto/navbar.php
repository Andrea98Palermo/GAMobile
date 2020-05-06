<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
    $(window).scroll(function(){
      var scrollval = window.pageYOffset;
      if(scrollval == 0){document.getElementById("bar").style.opacity = 1.0;}
      else{document.getElementById("bar").style.opacity = 0.7;}
    });
</script>

<script>
  $(window).resize(function(){
    var w = window.innerWidth;
    if(w < 850){document.getElementById("log_a").style.display = 'none';}
    else{document.getElementById("log_a").style.display = 'inline';}
  });
</script>  

<nav class="navbar navbar-expand-md bg-dark navbar-dark navbar fixed-top" id="bar">
  <a class="navbar-brand" href="index.php">GAMobile</a>
  <!--
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button> -->
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
        if (! isset($_SESSION['session_user'])) {
            echo 
            '
            <li class="nav-item login-item">
                <a class="login-trigger" id="log_a" href="#" data-target="#login" data-toggle="modal">Login</a>
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
        else
          echo 
          '
          <li class="nav-item login-item">
              <a class="login-trigger" id="log_a" href="#" data-target="#login" data-toggle="modal">Hi, ', $_SESSION['session_user'] ,'</a>
              <div id="login" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                      <div class="modal-content">
                      <div class="modal-body profile-sidebar">
                          
                        <button data-dismiss="modal" class="close">&times;</button>
                        
                        <div class="profile-userpic">
                          <img src="https://cdn2.vectorstock.com/i/1000x1000/37/76/check-user-logo-icon-design-vector-22953776.jpg" class="img-responsive" alt="">
                        </div>
                        
                        <div class="profile-usertitle">
                          <div class="profile-usertitle-name">
                            Marcus Doe
                          </div>
                          <div class="profile-usertitle-job">
                            Developer
                          </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR BUTTONS -->
                        <div class="profile-userbuttons">
                          <button type="button" class="btn btn-success btn-sm">Aggiungi carta</button>
                          <button type="button" class="btn btn-danger btn-sm">Elimina account</button>
                        </div>
                        <!-- END SIDEBAR BUTTONS -->
                        <!-- SIDEBAR MENU -->
                        <div class="profile-usermenu">
                        <div class="row">
                          <div class="col-sm-6" style="left: 50%; transform: translate(-50%);">
                            <ul class="nav nav-pills flex-column">
                              <li class="nav-item">
                                <a class="nav-link" href="#" style="color:blue">I miei ordini</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#" style="color:blue">Metodi di pagamento</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#" style="color:blue">Modifica dati profilo</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="#" style="color:red">Logout</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        </div>
                      </div>
                      </div>
                  </div>  
              </div>
          </li> 
          ';

      ?>
      

    </ul>
  </div>  
</nav>
