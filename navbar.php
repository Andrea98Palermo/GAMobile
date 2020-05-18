<html>
    <head>
        <link rel="stylesheet" href="css/navbar.css" type="text/css">
        <link rel="stylesheet" href="css/profilo.css" type="text/css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" lang="javascript" src="js/loginScript.js"></script>
        <script type="text/javascript" lang="javascript" src="js/registrationScript.js"></script>
        <script type="text/javascript" lang="javascript" src="js/modifyScript.js"></script>
        <script>
          $(document).scroll( function(evt) {
            var scrollval = window.pageYOffset;
            if(scrollval <= 0){document.getElementById("bar").style.opacity = 1.0;}
            else{document.getElementById("bar").style.opacity = 0.7;}
          });
        </script>
        <script>
            $(document).ready(function(){
                $("#log_a").click(function(){
                var o = document.getElementById("bar").style.opacity;
                if(o == 0.7){document.getElementById("bar").style.opacity = 1;}
              });
            });
        </script> 
        
        <script>
          $(window).resize(function(){
            if($(window).width() < 768){
              $(".tasto-login").css("position", "relative")
              $(".tasto-login").css("padding", "2%")
            }
            else{
              $(".tasto-login").css("position", "absolute")
              $(".tasto-login").css("padding", "0.5%")
            }
          });
        </script> 
  
    </head>


    <body>

      
      



      <nav class="navbar navbar-expand-md bg-dark navbar-dark navbar fixed-top" id="bar">
        <a class="navbar-brand" href="index.php"><img src="/assets/Logopit_1588840410527.png" alt="50" width="50" /> </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav mr-auto">
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
                  /* 
                  '
                  <li class="nav-item" style="margin-left:2%" >
                      <a class="tasto-login nav-link" id="log_a" href="#" data-target="#login" data-toggle="modal">Login</a>
                      <div id="login" class="modal fade">
                          <div class="modal-dialog">
                              <div class="modal-content">
                              <div class="modal-body" style="padding-left:15%; padding-right:15%; margin-top:5%;">
                                  <button data-dismiss="modal" class="close">&times;</button>
                                  <div style="text-align:center">
                                    <span class="testo-primario-chiaro">Login</span>
                                    <form method="POST" action="./php/login.php" style="margin-top:10%; margin-bottom:5%;">
                                    <input type="text" name="username" class="campo-form form-control" placeholder="Username" required/>
                                    <input type="password" name="password" class="campo-form form-control" placeholder="Password" required/>
                                    <input class="btn btn-success" type="submit" value="Login" name="login"/>
                                    </form>
                                  
                                    <span class="testo-secondario-chiaro" style="display:inline">Non sei registrato?</span>
                                      <a class="nav-link testo-primario-chiaro" style="display:inline" href="register.html">Clicca qui</a>
                                    <span class="testo-secondario-chiaro" style="display:inline">per registrarti</span>
                                  </div>
                              </div>
                              </div>
                          </div>  
                      </div>
                  </li> 
                  '*/
                  '<li class="nav-item" style="margin-left:2%">
                  <a class="tasto-login nav-link" id="log_a" href="#" data-target="#login" data-toggle="modal">Accedi e Registrazione</a>
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
                                        <form method="POST" action="./php/login.php"  style="margin-top:10%; margin-bottom:5%;" onSubmit="return validaFormLogin()">
                                        <input type="text" id="username1" name="username" class="campo-form form-control" placeholder="Username"  required/>
                                        <input type="password" id="password1" name="password" class="campo-form form-control" placeholder="Password" required/>
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
                                <form method="POST" action="./php/register.php" name="registrationForm" onSubmit="return validaFormRegister()">
                                  <input type="email" id="email" class="campo-form form-control" placeholder="Inserisci E-mail" name="email">
                                  <input type="text" id="username" class="campo-form form-control" placeholder="Inserisci Username" name="username" maxlength="50" required>
                                  <input type="password" id="password" class="campo-form form-control" placeholder="Inserisci Password" name="password" required>
                                  <input type="password" id="password2" class="campo-form form-control" placeholder="Conferma Password" name="password2" required>
                                  <input type="text" id="indirizzo" class="campo-form form-control" placeholder="Inserire indirizzo" name="indirizzo">
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
                /* 
                '
                <li class="nav-item login-item">
                    <a class="tasto-login nav-link" id="log_a" href="#" data-target="#login" data-toggle="modal">Hi, ', $_SESSION['session_user'] ,'</a>
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
                                        <a class="nav-link" href="#q" style="color:red">Logout</a>
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
                '
                */
                /*
                <li class="nav-item login-item">
                <button type="button" class="tasto-login nav-link" data-toggle="modal" data-target=".bd-example-modal-lg">Hi, ', $_SESSION['session_user'] ,'</button>

                <!--<a class="tasto-login nav-link" id="log_a" data-toggle="modal" data-target=".bd-example-modal-lg">Hi, ', $_SESSION['session_user'] ,'</a>-->
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="dialog">
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
                    </li> */
                /*
                    <a class="tasto-login nav-link" id="log_a" href="#" data-target="#login" data-toggle="modal">Hi, ', $_SESSION['session_user'] ,'</a>
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
                '*/
                '<li class="nav-item login-item">
                <!--<button type="button" class="tasto-login nav-link" data-toggle="modal" data-target=".bd-example-modal-lg">Hi, ', $_SESSION['session_user'] ,'</button>-->

                <a class="tasto-login nav-link" id="log_a" href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Hi, ', $_SESSION['session_user'] ,'</a>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="dialog">
                        <div class="modal-content">
                          <div class="modal-body scheda-profilo">
                            <div style="text-align:center">
                              <div class="immagine-profilo">
                                <!--<img src="https://cdn2.vectorstock.com/i/1000x1000/37/76/check-user-logo-icon-design-vector-22953776.jpg" class="img-responsive" alt="">-->
                                <img src="/assets/Logopit_1588758743983.jpg" class="img-responsive" alt="">
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
                                <!--<button type="button" class="bottone-maiusc btn-success btn-sm" href="/carta.html">Aggiungi carta</button>-->
                                <!--<button type="button" class="bottone-maiusc btn-danger btn-sm" >Elimina account</button>-->

                                <a class="bottone-maiusc btn-success btn-sm" href="/carta.html">Aggiungi carta</a>
                                <a class="bottone-maiusc btn-danger btn-sm" href="/php/delete.php?usern=',$_SESSION['session_user'],'">Elimina account</a>

                              </div>
                              <!-- END SIDEBAR BUTTONS -->
                              <!-- SIDEBAR MENU -->
                              <div class="sezione-menu">
                              <div class="row">
                                <div class="col-lg-12 centrato-orizzontale">
                                  <!--<ul class="nav nav-pills flex-column">
                                    <li class="nav-item">
                                      <a class="nav-link" href="#">I miei ordini</a>
                                    </li>
                                    <li class="nav-item">

                                      <div class="accordion" id="accordionExample2">
                                        <div class="card">
                                          <div class="card-header" id="headingTwo">
                                              <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">Metodi di pagamento</a>
                                          
                                          </div>

                                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample2">
                                          
                                          Carta: ',$_SESSION['session_proprietario'],' , <a class="bottone-maiusc btn-danger btn-sm" href="/php/carta.php">elimina</a>

                                          </div>
                                        </div> 

                                      
                                    </li>
                                    <li class="nav-item">

                                      <div class="accordion" id="accordionExample">
                                        <div class="card">
                                          <div class="card-header" id="headingOne">
                                              <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Modifica dati profilo</a>
                                          </div>

                                          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <form method="POST" action="./php/modify.php" name="modifyForm">
                                            <input type="text" id="idM" class="campo-form form-control" value="',$_SESSION['session_identificatore'],'" name="idM" maxlength="50" >
                                              <input type="text" id="emailM" class="campo-form form-control" value="',$_SESSION['session_email'],'" name="emailM" maxlength="50">
                                              <input type="text" id="usernameM" class="campo-form form-control" value="',$_SESSION['session_user'],'" name="usernameM" maxlength="50">
                                              <input type="password" id="passwordM" class="campo-form form-control" placeholder="Inserisci nuova Password" name="passwordM" >
                                              <input type="password" id="password2M" class="campo-form form-control" placeholder="Conferma Password" name="passwordM" >
                                              <input type="text" id="indirizzoM" class="campo-form form-control" value="',$_SESSION["session_indirizzo"],'" name="indirizzoM" >
                                              <button type="submit" class="bottone-maiusc btn-success btn-sm" name="modify">Modifica</button>
                                              <input type="reset" class="bottone-maiusc btn-danger btn-sm" value="Reset" />
                                            </form>
                                          </div>
                                        </div> 
                                        
                                    </li>
                                    
                                    <li class="nav-item">
                                      <a class="nav-link" href="./php/logout.php" style="color:red">Logout</a>
                                    </li>
                                  </ul>-->



                                  <div class="accordion" id="accordionExample">
                                    <div class="card">
                                      <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          Metodi di pagamento
                                          </button>
                                        </h2>
                                      </div>
                                    

                                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
          <!--    da fare -->
                                        Carta: ',$_SESSION['session_proprietario'],' , <a class="bottone-maiusc btn-danger btn-sm" href="/php/carta.php">elimina</a>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="card">
                                      <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          Modifica dati profilo
                                          </button>
                                          
                                        </h2>
                                      </div>


                                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                          <form method="POST" action="./php/modify.php" name="modifyForm" class="carddd">
                                        <!-- <input type="text" id="idM" class="campo-form form-control" value="',$_SESSION['session_identificatore'],'" name="idM" maxlength="50" > -->
                                              <input type="text" id="emailM" class="campo-form form-control" placeholder="Inserisci email" value="',$_SESSION['session_email'],'" name="emailM" maxlength="50">
                                              <input type="text" id="usernameM" class="campo-form form-control" value="',$_SESSION['session_user'],'" name="usernameM" maxlength="50">
                                              <input type="password" id="passwordM" class="campo-form form-control" placeholder="Inserisci nuova Password" name="passwordM" >
                                              <input type="password" id="password2M" class="campo-form form-control" placeholder="Conferma Password" name="passwordM" >
                                              <input type="text" id="indirizzoM" class="campo-form form-control" placeholder="Inserisci indirizzo" value="',$_SESSION["session_indirizzo"],'" name="indirizzoM" >
                                              <button type="submit" class="bottone-maiusc btn-success btn-sm" name="modify">Modifica</button>
                                              <input type="reset" class="bottone-maiusc btn-danger btn-sm" value="Reset" />
                                          </form>                                      
                                        </div>
                                      </div>
                                    </div>


                                    <div class="card">
                                      <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          I miei ordini
                                          </button>
                                        </h2>
                                      </div>
                                      

                                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusof them accusamus labore sustainable VHS.
                                        </div>
                                      </div>
                                    </div>
                                  

                                    <div class="card">
                                      <div class="card-header" id="headingFour">
                                        <h2 class="mb-0 ">
                                          <a class="link collapsed" href="./php/logout.php" style="color:red" >
                                          Logout
                                          </a>
                                          <!--<a class="nav-link" href="./php/logout.php" style="color:red">Logout</a>-->
                                        </h2>
                                      </div>
                       
                                    </div>
                                  </div>



                                </div>
                              </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </li> '
                
                ;

            ?>
            

          </ul>
        </div>  
      </nav>

    </body>
</html>
