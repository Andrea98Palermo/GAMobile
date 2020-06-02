<?php
    //Query che potranno servire nel profilo utente, come i miei ordini e le carte
    require_once('php/database.php');

    $query1 = 'SELECT identificatore, proprietario 
             FROM cards
             WHERE id= :id';
    
    $check = $pdo->prepare($query1);
    $check->bindParam(':id', $_SESSION['session_identificatore'], PDO::PARAM_STR);
    $check->execute();


    $query2 = 'SELECT id_acquisto, nome_prodotto
             FROM acquisti
             WHERE nome_utente= :nome_utente';
    
    $checkk = $pdo->prepare($query2);
    $checkk->bindParam(':nome_utente', $_SESSION['session_user'], PDO::PARAM_STR);
    $checkk->execute();
    //exit;

?>

<html>
    <head>
        <link rel="stylesheet" href="css/navbar.css" type="text/css">
        <link rel="stylesheet" href="css/profilo.css" type="text/css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" lang="javascript" src="js/loginScript.js"></script>
        <script type="text/javascript" lang="javascript" src="js/registrationScript.js"></script>
        <script type="text/javascript" lang="javascript" src="js/modifyScript.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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

    <!-- Navbar con tutti i link alle varie pagine, il logo del sito e il pulsante di login e registrazione o per accedre al profilo -->

      <nav class="navbar navbar-expand-md bg-dark navbar-dark navbar fixed-top" id="bar">
        <a class="navbar-brand" href="index.php"><img src="assets/Logopit_1589966960533.png" alt="150" width="150" /> </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="prodotti.php">Prodotti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="usato.php">Usato</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Offerte</a>
            </li>   --> 
            <li class="nav-item">
              <a class="nav-link" href="about_us.php">Noi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacts_assistance.php">Assistenza</a>
            </li>

            <!-- pulsante che dipende dai casi: -->

            <?php 
              if (! isset($_SESSION['session_id'])) {

                //caso uno dove l'uente non e' ne loggato ne registrato

                  echo 
                  
                  '<li class="nav-item" style="margin-left:2%">
                  <a class="tasto-login nav-link" id="log_a" href="#" data-target="#login" data-toggle="modal">Accedi e Registrazione</a>
                  <div id="login" class="modal fade">
                  <div class="modal-dialog">
                          <div class="modal-content">
                          <div class="modal-body" style="padding-left:15%; padding-right:15%; margin-top:5%;">
                          <button data-dismiss="modal" class="close">&times;</button>

                          <!-- Nav bar per scegliere se accedere al sito o registrarsi -->

                              <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Accedi</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Registrazione</a>
                                </li>
                              </ul>

                          <!-- LOGIN, con i vari controlli al form sia con ajax che con javascript -->

                              <div class="tab-content">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                      <div style="text-align:center">
                                        <span class="testo-primario-chiaro">Accedi</span>

                                        <form method="POST" action="php/login.php"  style="margin-top:10%; margin-bottom:5%;" onSubmit="return validaFormLogin()">
                                        <input type="text" id="username1" name="username" class="campo-form form-control" placeholder="Username"  required/>
                                        <input type="password" id="password1" name="password" class="campo-form form-control" placeholder="Password" required/>
                                        <input class="btn btn-success" type="submit" value="Login" name="login"/>
                                        </form>
                                      
                                      </div>
                                </div>

                              <!-- REGISTRAZIONE, con i vari controlli al form sia con ajax che con javascript  -->

                              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div style="text-align:center">
                                <span class="testo-primario-chiaro">Registrazione</span>

                                <form method="POST" action="php/register.php" name="registrationForm" onSubmit="return validaFormRegister()">
                                  <input type="email" id="email" class="campo-form form-control" placeholder="Inserire E-mail (facoltativo)" name="email">
                                  <input type="text" id="username" class="campo-form form-control" placeholder="Inserire Username" name="username" maxlength="50" required>
                                  <input type="password" id="password" class="campo-form form-control" placeholder="Inserire Password" name="password" required>
                                  <input type="password" id="password2" class="campo-form form-control" placeholder="Conferma Password" name="password2" required>
                                  <input type="text" id="indirizzo" class="campo-form form-control" placeholder="Inserire indirizzo (facoltativo)" name="indirizzo">
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
              else{

                // caso in cui si e' fatto il login 
                
                echo 

                '<li class="nav-item login-item">
                  <a class="tasto-login nav-link" id="log_a" href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Ciao, ', $_SESSION['session_user'] ,'</a>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="dialog">
                        <div class="modal-content">
                          <div class="modal-body scheda-profilo">
                            <div style="text-align:center">

                            <!-- immagine logo -->

                              <div class="immagine-profilo">
                                <img src="/assets/Logopit_1588758743983.jpg" class="img-responsive" alt="">
                              </div>

                              <!-- Saluto all utente -->
                              
                              <div class="info-profilo">
                                <div class="info-profilo-utente testo-primario-scuro">',
                                $_SESSION['session_user'],
                                '
                                </div>
                                <div class="info-profilo-bentornato testo-secondario-scuro">
                                  Bentornato!
                                </div>
                              </div>

                              <!-- Bottoni per aggiungere carta e per eliminare account -->

                              <div class="sezione-bottoni">
                                <a class="bottone-maiusc btn-success btn-sm" href="carta.html">Aggiungi carta</a>
                                <a class="bottone-maiusc btn-danger btn-sm" href="php/delete.php?usern=',$_SESSION['session_user'],'">Elimina account</a>
                              </div>

                              <!-- MENU per i miei ordini, le mie carte e modifica profilo -->
                              <div class="sezione-menu">
                              <div class="row">
                                <div class="col-lg-12 centrato-orizzontale">
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

                                        <!-- caso in cui fa vedere le diverse carte associate all utente, se ne ha -->

                                        ';
                                        $cartaCredito =$check->fetch();
                                        if ($cartaCredito==0){
                                          echo ("nessuna carta registrata :");
                                          echo '<a class="bottone-maiusc btn-success btn-sm" href="carta.html">Aggiungi carta</a>';
                                        }else{
                                          //echo ' <form method="POST" action="./php/carta.php" name="eliminacartaForm">
                                          echo htmlspecialchars($cartaCredito['proprietario']);
                                          echo '  ';
                                          echo '<a class="bottone-maiusc btn-danger btn-sm" href="php/elimina_carta.php?eliminare=',$cartaCredito['identificatore'],'">elimina</a></br></br>';
                                        while ($cartaCredito = $check->fetch()):
                                          echo ' <div class="separatore"></div></br> ';
                                          echo htmlspecialchars($cartaCredito['proprietario']);
                                          echo '  ';
                                          echo '<a class="bottone-maiusc btn-danger btn-sm" href="php/elimina_carta.php?eliminare=',$cartaCredito['identificatore'],'">elimina</a>';
                                        endwhile;
                                      }
                                        
                                        echo'
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

                                      <!-- Modifica dati profilo, rispettando sempre i valori con javascript e con le ajax -->

                                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">

                                          <form method="POST" action="php/modify.php" name="modifyForm" class="carddd" onSubmit="return validaMod()">
                                              <input type="text" id="emailM" class="campo-form form-control" placeholder="Inserire email" value="',$_SESSION['session_email'],'" name="emailM" maxlength="50">
                                              <input type="text" id="usernameM" class="campo-form form-control" value="',$_SESSION['session_user'],'" name="usernameM" maxlength="50">
                                              <input type="password" id="passwordM" class="campo-form form-control" placeholder="Inserire nuova Password" name="passwordM" >
                                              <input type="password" id="password2M" class="campo-form form-control" placeholder="Conferma Password" name="passwordM" >
                                              <input type="text" id="indirizzoM" class="campo-form form-control" placeholder="Inserire indirizzo" value="',$_SESSION["session_indirizzo"],'" name="indirizzoM" >
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
                                    
                                      <!-- caso in cui fa vedere il nome dei vari prodotti comprati, associati all utente, se ne ha -->

                                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                        
                                        ';
                                        $pr =$checkk->fetch();
                                        if ($pr==0){
                                          echo ("nessun acquisto effetuato!");
                                          echo '</br>';
                                        }else{
                                          //echo ' <form method="POST" action="./php/carta.php" name="eliminacartaForm">
                                          echo htmlspecialchars($pr['nome_prodotto']);
                                          echo '</br>';
                                        while ($pr = $checkk->fetch()):
                                          echo ' <div class="separatore"></div></br> ';
                                          echo htmlspecialchars($pr['nome_prodotto']);
                                          echo '</br>';
                                        endwhile;
                                      }
                                        
                                        echo'

                                        </div>
                                      </div>
                                    </div>
                                  
                                    <!-- LOGOUT -->

                                    <div class="card">
                                      <div class="card-header" id="headingFour">
                                        <h2 class="mb-0 ">
                                          <a class="link collapsed" href="php/logout.php" style="color:red" >
                                          Esci
                                          </a>
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

                                      }?>
            

          </ul>
        </div>  
      </nav>

    </body>
</html>
