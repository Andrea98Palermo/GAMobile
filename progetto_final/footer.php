<!--AUTORE: GIUSEPPE D'IGNAZIO-->

<html>
    <head>
        <!-- abbiamo creato direttamente qui il css -->
        <style type="text/css">
        /*separatore bianco */
        .separatore {background-color:#4f4f4f; height:1px; margin-top:2%; margin-left:3%; margin-right:3%;}
        /*dividiamo in colonne il footer*/
        .colonna-footer {flex:23%; text-align:left; padding-left: 5%;}
        .colonna-footer a {color: lightskyblue;}
        .colonna-footer h5 {color: gray; font-weight: 900;}
        /*form per il footer*/
        .campo-formm {   
            margin: 1em 0;
            border: none;
            border-radius: 15px;
            box-shadow: none;
            border-bottom: 3px solid rgb(0,0,0);
            border-top: 1px solid rgb(0,0,0);
            padding-left: 3%;
            font-weight: normal;
            background-color: white;
            opacity: 0.5;
            }
            
        .campo-form:hover, .campo-form:focus { box-shadow: none; border-color: green;}

        .textare{ margin-top: 15.9896px; margin-bottom: 15.9896px; height: 97px; width: 70%; }

        .colonna-footer h2 {color: gray; font-weight: 1300;}
        
        .colonna-footer b {color: gray; font-weight: 2000;}

        .colonna-footer img{
            margin-top: 5px;
            margin-bottom: 5px;
            vertical-align: middle;
            width: 30%;
        }

        </style>
    </head>
    
    <body>

        <div class="separatore"></div>

        <div style="margin-bottom:2%; margin-top:1%;">
            <div class="row">

                <!-- tutte le colonne del footer -->
                <!-- prima colonna descrizione veloce -->
                    <div class="column colonna-footer">
                        <h2>GA-Mobile</h2>
                        <b> In questo sito potete trovare i diversi prodotti del nostro marchio! </b> </br> 
                        <img src="assets/Logopit_1589966960533.png" />
                    </div>
                    <!-- seconda colonna link veloci -->
                    <div class="column colonna-footer">
                        <h5>Ricerche veloci</h5>
                        <div>
                            <a href="index.php">Pagina principale</a>
                        </div>
                        <div>
                            <a href="prodotti.php">Prodotti</a>
                        </div>
                        <div>
                            <a href="usato.php">Usato</a>
                        </div>
                        <div>
                            <a href="about_us.php">Noi</a>
                        </div>
                        <div>
                            <a href="contacts_assistance.php">Assistenza</a>
                        </div>
                    </div>
                    <div class="column colonna-footer">
                        <!-- terza colonna domande form -->
                        <h5>Domande?</h5>
                        <!-- php per il module form di invio domande, con email gia' inserita se loggati nel sito senno' senza 
                    e se loggati nel sito ma senza l'email registrata-->
                        <?php

                                if(isset($_POST['domanda'])){
                                    $email = $_POST['email'] ?? '';
                                    $testo = $_POST['testo'] ?? '';

                                    $query = "
                                                INSERT INTO domande
                                                VALUES (0, :email, :testo)
                                            ";
                                        
                                            $check = $pdo->prepare($query);
                                            $check->bindParam(':email', $email, PDO::PARAM_STR);
                                            $check->bindParam(':testo', $testo, PDO::PARAM_STR);
                                            $check->execute();
                                            
                                            if ($check->rowCount() > 0) {
                                                echo '<b>email inviata con successo, Inviare un altra:<b>';
                                                echo ' <form method="POST" action=',$_SERVER['PHP_SELF'],' name="domandeForm">';
                                                if (! isset($_SESSION['session_id'])) {
                                                    echo '
                                                        <input type="email" id="email" class="campo-formm" placeholder="Inserisci E-mail" name="email" required></br>
                                                        ';
                                                }else{
                                                    if($_SESSION['session_email']==null){
                                                        echo '
                                                        <input type="email" id="email" class="campo-formm" placeholder="Inserisci E-mail" name="email" required></br>
                                                        ';
                                                    }else{
                                                        echo '
                                                        <input type="email" id="email" class="campo-formm" placeholder="Inserisci E-mail" value="',$_SESSION['session_email'],'" name="email" required></br>
                                                        ';
                                                    }
                                                
                                                }
                                                echo '<textarea name="testo" id="testo" class="campo-formm textare" placeholder="Inserire testo.." required></textarea></br>
                                                        <button type="submit" class="btn btn-success" name="domanda">Invia</button>
                                                        </form>';
                                            
                                            } else {
                                                $msg = 'Problemi con l\'inserimento dei dati %s';
                                            }
                                        

                                        exit;
                                }
                                else{
                                    echo ' <form method="POST" action=',$_SERVER['PHP_SELF'],' name="domandeForm">';
                                    if (! isset($_SESSION['session_id'])) {
                                        echo '
                                            <input type="email" id="email" class="campo-formm" placeholder="Inserisci E-mail" name="email" required></br>
                                            ';
                                    }else{
                                        if($_SESSION['session_email']==null){
                                            echo '
                                            <input type="email" id="email" class="campo-formm" placeholder="Inserisci E-mail" name="email" required></br>
                                            ';
                                        }else{
                                            echo '
                                            <input type="email" id="email" class="campo-formm" placeholder="Inserisci E-mail" value="',$_SESSION['session_email'],'" name="email" required></br>
                                            ';
                                        }
                                    
                                    }
                                    echo '<textarea name="testo" id="testo" class="campo-formm textare" placeholder="Inserire testo.." required></textarea></br>
                                            <button type="submit" class="btn btn-success" name="domanda">Invia</button>
                                            </form>';
                                        }
                                ?>
                    </div>
                
            </div>
        </div>
    </body>
</html>

