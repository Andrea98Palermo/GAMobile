<?php
    session_start();
    require_once('php/database.php');

    $query = 'SELECT nome, condizione, prezzo, immagine
             FROM prodottiUsati';

    $q = $pdo->query($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>GAMobile</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/usato.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="js/usato.js"></script>
    </head>

    <body>

            <!-- NAVBAR -->
            <?php 
                include 'navbar.php'
            ?>

            <!-- RICERCA PER NOME -->
            <input placeholder="cerca modelli" type="text" class="campo-form" style="background-color:white; opacity:0.9; width:80%; height:5vh; margin-left:10%; margin-right:10%;" id="ricerca"/>

            
            
            <!-- SEZIONE FILTRI PREZZO E CONDIZIONE PRODOTTO -->
            <div class="row justify-content-center">
                <button id="rimuovi-filtri" class="bottone-maiusc btn-success btn-sm" style="padding:1%; margin-bottom:1%;">Rimuovi filtri</button>
            </div>

            <div class="row justify-content-center">
                <a href="#" class="filtro-cond testo-secondario-chiaro">Ricondizionato fascia A</a>
                <a href="#" class="filtro-cond testo-secondario-chiaro">Ricondizionato fascia B</a> 
                <a href="#" class="filtro-cond testo-secondario-chiaro">Ricondizionato fascia C</a> 
                
            </div> 
            
            <div class="row justify-content-center">
                <a href="#" class="filtro-cond testo-secondario-chiaro">Usato fascia A</a> 
                <a href="#" class="filtro-cond testo-secondario-chiaro">Usato fascia B</a>  
            </div>

            
            <div class="row justify-content-center">
                <a href="#" class="filtro-prezzo testo-secondario-chiaro">100 o meno</a>
                <a href="#" class="filtro-prezzo testo-secondario-chiaro">200 o meno</a> 
                <a href="#" class="filtro-prezzo testo-secondario-chiaro">300 o meno</a> 
                <a href="#" class="filtro-prezzo testo-secondario-chiaro">400 o meno</a> 
                <a href="#" class="filtro-prezzo testo-secondario-chiaro">500 o meno</a>  
            </div> 

            
            <!-- LISTA PRODOTTI DISPONIBILI -->
            <div id="lista">

                <ul style="padding:0; margin-bottom:3%;">
                    <?php while ($r = $q->fetch()): ?>
                        <li>
                        
                                    <div class="separatore" style="margin-left:2%; margin-right:2%;"></div>
                                    <div class="prodotto row" style="margin-left:3%;">
                                        
                                        <img class="figura-prod" style="flex:20%; max-width:20%; margin-top:1%; margin-right:1%" src=<?php echo $r['immagine'] ?>>
                                        
                                        <div style="flex:20%; padding-top:1%;" class="container">    
                                            <div class="nome-prod testo-primario-chiaro"><?php echo htmlspecialchars($r['nome']) ?></div>
                                            <div class="condizione-prod testo-secondario-chiaro"><?php echo htmlspecialchars($r['condizione']) ?></div>
                                            <div class="prezzo-prod testo-secondario-chiaro"><?php echo htmlspecialchars($r['prezzo']); echo '€'; ?></div>
                                        </div>
                                    </div>
                                    
                            
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>

            <?php 
                include 'footer.php'
            ?>
        

    <body>
<html>