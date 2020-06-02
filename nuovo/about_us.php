<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>about_us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/assistenza.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
<body>

<!-- inculdiamo la navbar -->
<?php 
  include 'navbar.php'
?>

<!-- rappresenta la cover iniziale e quindi l'immagine di copertina in cima -->
<section class="cover_aboutus cover--singole">
    <div class="cover__caption__filtro"></div>
    <div class="cover__caption">
        <div class="cover__caption__copy_2">
        <h1>Ciao</h1>
        <h2>siamo GAMobile</h2>
    </div>
    </div>
</section>

<!-- rappresenta l'articolo scritto sotto la cover, il movimento e' dato dal fadeInUp -->
<articolo class="singole">
    <div class="singole__copy animazione fadeInUp">
        <p> Noi siamo GA-Mobile, un progetto per linguaggi e tecnologia per il web, abbiamo cercato di usare tutto cio' che e' stato trattato a lezione.</p>
        <p> Da Html, Php , Javascript , funzioni, ajax, css, bootstrap, jquery, mysql e altro.</p>
        <p> Questo progetto rappresenta un sito di vendita di dispositivi telefonici, il nostro nuovo marchio "GA-Mobile", oltre a vendere i propri prodotti, vende anche prodotti usati, in modo che i client possano avere i dispositivi di ultima generazione.</p>
        <p> Abbiamo creato una parte interativa per registrazione, login, aggiunta di carta di credito, modifica dati, scelta del dispositivo in base al prezzo, colore ecc..
        inoltre abbiamo cercato di rendere il cliente a suo agio in un esperienza coinvolgente attraverso il nostro sito, con immagini apposite e spazi di assitenza, di domande.</p>
    </div>
</articolo>

<!-- chiamata del bannere per presentarci, il clearfix serve per migliorare la pulizia visiva -->
<section class="banner clearfix">
  <div class="banner__image5"></div>
  <div class="banner__copy">
    <div class="banner__copy__testo">
      <h3>Andrea Palermo</h3>
      <p>Matricola.....</p>
    </div>
  </div>
</section>

<section class="banner clearfix">
  <div class="banner__copy">
    <div class="banner__copy__testo">
      <h3>Giuseppe D'Ignazio</h3>
      <p>Matricola 1811897</p>
    </div>
  </div>
  <div class="banner__image4"></div>
</section>


<!-- includiamo il footer -->
<?php 
        include 'footer.php'
      ?>


</body>
</html>