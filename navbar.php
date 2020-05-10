<html>
    <head>
        <link rel="stylesheet" href="css/navbar.css" type="text/css">
        <link rel="stylesheet" href="css/profilo.css" type="text/css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" lang="javascript" src="js/registrationScript.js"></script>
        <script>
              $(window).scroll(function(){
                var scrollval = window.pageYOffset;
                if(scrollval <= 0){document.getElementById("bar").style.opacity = 1.0;}
                else{document.getElementById("bar").style.opacity = 0.7;}
              });
        </script>
    </head>


    <body>

      

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

            <!-- TODO: CRIPTARE PASSWORD IN JAVASCRIPT -->

            <?php 
              if (! isset($_SESSION['session_id'])) {
                  echo 
                  '
                  <li class="nav-item" style="margin-left:2%">
                      <a class="tasto-login" id="log_a" href="#" data-target="#login" data-toggle="modal">Login</a>
                      <div id="login" class="modal fade">
                      <div class="modal-dialog">
                              <div class="modal-content">
                              <div class="modal-body" style="padding-left:15%; padding-right:15%; margin-top:5%;">
                              <button data-dismiss="modal" class="close">&times;</button>

                              <!-- Nav tabs -->
                                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                                    </li>
                                  </ul>

                              <!-- Tab panes -->
                                  <div class="tab-content">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                          <div style="text-align:center">
                                            <span class="testo-primario-chiaro">Login</span>
                                            <form method="POST" action="./php/login.php"  style="margin-top:10%; margin-bottom:5%;">
                                            <input type="text" name="username" class="campo-form form-control" placeholder="Username"  required/>
                                            <input type="password" name="password" class="campo-form form-control" placeholder="Password" required/>
                                            <input class="btn btn-success" type="submit" value="Login" name="login"/>
                                            </form>
                                          
                                            <!--<span class="testo-secondario-chiaro" style="display:inline">Non sei registrato?</span>
                                              <a class="nav-link testo-primario-chiaro" style="display:inline" href="register.html">Clicca qui</a>
                                            <span class="testo-secondario-chiaro" style="display:inline">per registrarti</span>-->
                                          </div>
                                    </div>
                                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div style="text-align:center">
                                    <span class="testo-primario-chiaro">Registration</span>
                                    <form method="POST" action="./php/register.php" name="registrationForm" onSubmit="return validaForm()">
                                      <input type="email" id="Email" class="campo-form form-control" placeholder="E-mail" >
                                      <input type="text" id="username" class="campo-form form-control" placeholder="Insert Username" name="username" maxlength="50" onChange="return controllaUsername()" required>
                                      <input type="password" id="password" class="campo-form form-control" placeholder="Insert Password" name="password" onChange="return controllaPassword()" required>
                                      <input type="password" id="password2" class="campo-form form-control" placeholder="Confirm Password" name="password2" onChange="return confirmPassword()" required>
                                      <button type="submit" class="btn btn-success" name="register">Registrati</button>
                                    </form>
                                    </div>
                                    </div>
                                  </div>


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
                    <a class="tasto-login" id="log_a" href="#" data-target="#login" data-toggle="modal">Hi, ', $_SESSION['session_user'] ,'</a>
                    <div id="login" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-body scheda-profilo">
                              <div style="text-align:center">
                                <div class="immagine-profilo">
                                  <img src="https://cdn2.vectorstock.com/i/1000x1000/37/76/check-user-logo-icon-design-vector-22953776.jpg" class="img-responsive" alt="">
                                </div>
                                
                                <div class="info-profilo">
                                  <div class="info-profilo-utente testo-primario-scuro">',
                                  $_SESSION['session_user'],
                                  '
                                  </div>
                                  <div class="info-profilo-bentornato testo-secondario-scuro">
                                    Bentornato!
                                  </div>
                                </div>
                                <!-- END SIDEBAR USER TITLE -->
                                <!-- SIDEBAR BUTTONS -->
                                <div class="sezione-bottoni">
                                  <button type="button" class="bottone-maiusc btn-success btn-sm">Aggiungi carta</button>
                                  <button type="button" class="bottone-maiusc btn-danger btn-sm">Elimina account</button>
                                </div>
                                <!-- END SIDEBAR BUTTONS -->
                                <!-- SIDEBAR MENU -->
                                <div class="sezione-menu">
                                <div class="row">
                                  <div class="col-sm-6 centrato-orizzontale">
                                    <ul class="nav nav-pills flex-column">
                                      <li class="nav-item">
                                        <a class="nav-link" href="#">I miei ordini</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="#">Metodi di pagamento</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="#">Modifica dati profilo</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="./php/logout.php" style="color:red">Logout</a>
                                      </li>
                                    </ul>
                                  </div>
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

    </body>
</html>
