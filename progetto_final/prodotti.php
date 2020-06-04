<?php
    session_start();

    require_once('php/database.php');

    $query1= "SELECT nome, immagine
            FROM modelli
            WHERE fascia = 'pro'";
    $query2= "SELECT nome, immagine
        FROM modelli
        WHERE fascia = 'medium'"; 
    $query3= "SELECT nome, immagine
        FROM modelli
        WHERE fascia = 'lite'";    
        
    $q1 = $pdo->query($query1);
    $q2 = $pdo->query($query2);
    $q3 = $pdo->query($query3);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>GAMobile</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/prodotti.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        
        <!-- GESTIONE CLICK DEI PRODOTTI -->
        <script src="js/prodotti.js"></script>
    </head>
    <body>

        <div class="container">
            <!-- NAVBAR -->
            <?php 
                include 'navbar.php'
            ?>
            
            <!-- LISTA PRODOTTI -->
            <div class="colonna-flex-grande">
                <span class="row titolo-grande testo-secondario-chiaro">La nostra gamma</span>
                
                <span class="row titolo-piccolo testo-primario-chiaro">Fascia Pro</span>

                <?php while ($r = $q1->fetch()): ?>
                    <div class="prodotto container">
                        <img src=<?php echo $r['immagine'] ?>>
                        <div class="blocco-testo centrato-orizzontale">
                            <div class="testo-in-blocco">
                            <b class="testo-primario-chiaro"><?php echo htmlspecialchars($r['nome']) ?></b>
                            </div>
                            <div class="testo-in-blocco">  
                            <a href="#" class="testo-secondario-chiaro">Visualizza></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

                <span class="row titolo-piccolo testo-primario-chiaro">Fascia Medium</span>

                <?php while ($r = $q2->fetch()): ?>
                    <div class="prodotto container">
                        <img src=<?php echo $r['immagine'] ?>>
                        <div class="blocco-testo centrato-orizzontale">
                            <div class="testo-in-blocco">
                            <b class="testo-primario-chiaro"><?php echo htmlspecialchars($r['nome']) ?></b>
                            </div>
                            <div class="testo-in-blocco">  
                            <a href="#" class="testo-secondario-chiaro">Visualizza></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

                <span class="row titolo-piccolo testo-primario-chiaro">Fascia Lite</span>

                <?php while ($r = $q3->fetch()): ?>
                    <div class="prodotto container">
                        <img src=<?php echo $r['immagine'] ?>>
                        <div class="blocco-testo centrato-orizzontale">
                            <div class="testo-in-blocco">
                            <b class="testo-primario-chiaro"><?php echo htmlspecialchars($r['nome']) ?></b>
                            </div>
                            <div class="testo-in-blocco">  
                            <a href="#" class="testo-secondario-chiaro">Visualizza></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                
            </div>

            <!-- FOOTER -->
            <?php 
                include 'footer.php'
            ?>
        </div>

    <body>
<html>