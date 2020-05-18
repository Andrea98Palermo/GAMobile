<?php
    session_start();
    require_once('php/database.php');

    $query = 'SELECT nome, condizione, prezzo
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
    <!--<script src="paging.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready( function() {
            var input = document.getElementById('ricerca');
            input.onkeyup = function () {
                var filter = input.value.toUpperCase();
                var lis = document.getElementById('lista').getElementsByTagName('li');
                var names = document.querySelectorAll('ul li .row .nome-prod');
                for (var i = 0; i < lis.length; i++) {
                    var name = names[i].innerHTML; 
                    if (name.toUpperCase().indexOf(filter) == 0) 
                        lis[i].style.display = 'list-item';
                    else
                        lis[i].style.display = 'none';
                }
            }
        });
    </script>
    
    <script>
        $(document).ready( function() {
            $(".filtro-cond").click(function(){
                
                var others = $(".filtro-cond")
                for (var i = 0; i < others.length; i++) {
                    others[i].classList.remove("active");
                }
                this.classList.add("active");
                var filter = $(this).text().toUpperCase();
                var lis = document.getElementById('lista').getElementsByTagName('li');
                var names = document.querySelectorAll('ul li .row .condizione-prod');
                for (var i = 0; i < lis.length; i++) {
                    if(lis[i].style.display = 'list-item'){
                        var name = names[i].innerHTML;
                        if (name.toUpperCase().indexOf(filter) == 0) 
                            lis[i].style.display = 'list-item';
                        else
                            lis[i].style.display = 'none';
                    }
                }
            
            });    
        });
    </script>

    <script>
        $(document).ready( function() {
            $(".filtro-prezzo").click(function(){
                
                var others = $(".filtro-prezzo")
                for (var i = 0; i < others.length; i++) {
                    others[i].classList.remove("active");
                }
                this.classList.add("active");
                var filter = parseInt($(this).text().substring(0,3));
                var lis = document.getElementById('lista').getElementsByTagName('li');
                var names = document.querySelectorAll('ul li .row .prezzo-prod');
                for (var i = 0; i < lis.length; i++) {
                    if(lis[i].style.display = 'list-item'){
                        var name = parseInt(names[i].innerHTML.substring(0,3));
                        if (name <= filter) 
                            lis[i].style.display = 'list-item';
                        else
                            lis[i].style.display = 'none';
                    }
                }
            
            });    
        });
    </script>

    <script>
        $(document).ready( function() {
            $("#rimuovi-filtri").click(function(){
                var lis = document.getElementById('lista').getElementsByTagName('li');
                for (var i = 0; i < lis.length; i++) {
                    lis[i].style.display = 'list-item';
                }
            });    
        });
    </script>

    <!--
    <script>
        $(function() {
            $("#paginabile").JPaging({
                pageSize: 2
            });
        });

    </script>
    -->

   

    </head>
    <body>

        
            <?php 
                include 'navbar.php'
            ?>

            <input placeholder="cerca modelli" type="text" class="campo-form" style="background-color:white; opacity:0.9; width:80%; height:5vh; margin-left:10%; margin-right:10%;" id="ricerca"/>

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

            <div id="lista">

                <ul id="paginabile" style="padding:0; margin-bottom:3%;">
                <?php while ($r = $q->fetch()): ?>
                    <li>
                    
                                <div class="separatore" style="margin-left:2%; margin-right:2%;"></div>
                                <div class="row" style="margin-left:3%;">
                                    
                                    <img style="flex:20%; max-width:20%; margin-top:1%; margin-right:1%" src="assets/carousel_1.jpg">
                                    
                                    <div style="flex:20%; padding-top:1%;" class="container">    
                                        <div class="nome-prod testo-primario-chiaro"><?php echo htmlspecialchars($r['nome']) ?></div>
                                        <div class="condizione-prod testo-secondario-chiaro"><?php echo htmlspecialchars($r['condizione']) ?></div>
                                        <div class="prezzo-prod testo-secondario-chiaro"><?php echo htmlspecialchars($r['prezzo']); echo '€'; ?></div>
                                    </div>
                                </div>
                                
                        
                    </li>
                <?php endwhile; ?>
                <!--
                    <li>
                    
                                <div class="separatore" style="margin-left:2%; margin-right:2%;"></div>
                                <div class="row" style="margin-left:3%">
                                    
                                    <img style="flex:20%; max-width:20%; margin-top:1%; margin-right:1%" src="assets/carousel_2.jpg">
                                    
                                    <div style="flex:20%; padding-top:1%;" class="container">    
                                        <div class="nome-prod testo-primario-chiaro">Smartphone 2</div>
                                        <div class="condizione-prod testo-secondario-chiaro">Usato fascia B</div>
                                        <div class="prezzo-prod testo-secondario-chiaro">350E</div>
                                    </div>
                                </div>
                                
                        
                    </li>
                -->
                </ul>
            </div>

            <?php 
                include 'footer.html'
            ?>
        

    <body>
<html>