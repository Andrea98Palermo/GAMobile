<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>contacts_assistance</title>
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
<section class="cover_assistenza cover--singole">
<div class="cover__caption__filtro"></div>
  <div class="cover__caption" >
    <div class="cover__caption__copy animated fadeInUp">
    <h1 class="testo-primario-chiaroo">Assistenza</h1>
    <h2>per problemi e assistenza tecnica</h2>
    <!--<a href="" class="button">chiamate...</a>-->
    </div>
  </div>
</section>

<!-- queste sono le tre card che vediamo entrare dal basso, abbiamo messo un movimento iniziale e uno quando si passa sopra con il mouse,
 mentre il clearfix serve solo per una pulizia visiva. -->
<section class="cards clearfix">
  <div class="card animazione zoomIn">
    <img class="card__image" src="https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" alt="Nature">
       <div class="card__copy">
          <h3>Assistenza generale</h3>
          <h6>per saperne clicca qui...</h6>
          <a href="#primo" class="btn btn-primary">Qui</a>
      </div>
    </div>
    <div class="card animazione zoomIn">
    <img class="card__image" src="https://images.unsplash.com/photo-1458862768540-8b091824fe2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1052&q=80" alt="Nature">
       <div class="card__copy">
          <h3>Assistenza telefonica</h3>
          <h6>per saperne clicca qui...</h6>
          <a href="#secondo" class="btn btn-primary">Qui</a>
      </div>
    </div>
    <div class="card animazione zoomIn">
    <img class="card__image" src="https://images.unsplash.com/photo-1580982333389-cca46f167381?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="Nature">
       <div class="card__copy">
          <h3>Assistenza sull'usato</h3>
          <h6>per saperne clicca qui...</h6>
          <a href="#terzo" class="btn btn-primary">Qui</a>
      </div>
    </div>
</section>

<hr>

<!-- chiamata del bannere per approfondire gli argomenti-->
<section id="primo" class="banner clearfix">
  <div class="banner__image1"></div>
  <div class="banner__copy">
    <div class="banner__copy__testo">
      <h3>Assistenza generale</h3>
      <p>In questo paragrafo approfondiami i problesi di assistenza di ogni tipo, in modo generale e cerchiamo di dare risposte per risolvere tutti i problemi...</p>
    </div>
  </div>
</section>

<!-- domande frequenti  -->
<div class="box">
  <p class="scritta">Domande frequenti (Assitesenza generale)</p>
  <div class="faqs">
  <details>
    <summary>Come accendere un telefono?</summary>
    <p class="text">Premere il tasto sulla destra e tenere premuto. Se questo tasto non funziona e non riuscite ad accendere il proprio dispositivo allora contattare il centro assistenza al numero in azzurro. 3343553633</p>
  </details>
  <details>
      <summary>Non mi funziona lo schermo?</summary>
      <p class="text">Provare a riavviare il telefono, se non ci sono cambiamenti recarsi ad un centro assistenza GA-Mobile</p>
  </details>
  <details>
    <summary>Non mi funzionano gli auricolare?</summary>
    <p class="text">Provare a riavviare il telefono, se non ci sono cambiamenti provare che le cuffiette funzionino effettivamente, altrimenti recarsi ad un centro assistenza GA-Mobile</p>
  </details>
</div>
</div> 

<section id="secondo" class="banner clearfix">
  <div class="banner__copy">
    <div class="banner__copy__testo">
      <h3>Assistenza telefonica</h3>
      <p>In questo paragrafo approfondiami i problesi di assistenza telefonica, in modo generale e cerchiamo di dare risposte per risolvere tutti i problemi...</p>
    </div>
  </div>
  <div class="banner__image2"></div>
</section>

<div class="box">
  <p class="scritta">Domande frequenti (Assitesenza telefonica)</p>
  <div class="faqs">
  <details>
    <summary>Non riesco a cambiare la sim?</summary>
    <p class="text">Per cambiare la sim, bisogna aprire la fessura sulla sinistra con un oggetto a punto, incorporato nel pacchetto telefono, una volta aperta la fessura bastera' inserire la sim.</p>
  </details>
  <details>
      <summary>Come installare app?</summary>
      <p class="text">Scaricare l'app store per scaricare le app da tenere nel proprio dispositivo.</p>
  </details>
  <details>
    <summary>Come cambiare pin?</summary>
    <p class="text">Andare nella sezione impostazioni del dispositivo e premere su sicurezza, poi premere su sicurezza dispositivo e li immettere pin vecchio e dopo quello nuovo.</p>
  </details>
</div>
</div> 

<section id="terzo" class="banner clearfix">
  <div class="banner__image3"></div>
  <div class="banner__copy">
    <div class="banner__copy__testo">
      <h3>Assistenza sull'usato</h3>
      <p>In questo paragrafo approfondiami i problesi di assistenza sull'usato, in modo generale e cerchiamo di dare risposte per risolvere tutti i problemi...</p>
    </div>
  </div>
</section>

<div class="box">
  <p class="scritta">Domande frequenti (Assitesenza sull'usato)</p>
  <div class="faqs">
  <details>
    <summary>Posso vendere un telefono?</summary>
    <p class="text">Certo, bastera' che ti rechi in un qualsiasi centro GA-Mobile e parlare con uno dei nostri dipendenti. (Ricorda che il tuo dispositivo deve essere in condizioni molto buone e non deve avere diffetti di fabbrica).</p>
  </details>
  <details>
      <summary>Come comprare un telefono usato?</summary>
      <p class="text">Abbiamo una sezione apposita per la vendita di dispositivi usati, vedere nella voce in alto "usato".</p>
  </details>
  <details>
    <summary>Quanto viene valutato un telefono usato?</summary>
    <p class="text">Nei nostri centri assistenza compriamo il 70% dei telefoni proposti, l'importante che il dispositivo funzioni correttamente.</p>
  </details>
</div>
</div> 

<!-- inculdiamo il footer -->
<?php 
        include 'footer.php'
      ?>


</body>
</html>