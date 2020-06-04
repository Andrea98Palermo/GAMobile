<?php
	session_start();

	require_once('php/database.php');
	
	$nome = $_GET["prod"];

	$q = "SELECT prezzo
	FROM modelli
	WHERE nome = :n
	";

	$q = $pdo->prepare($q);
	$q->bindParam(':n', $nome, PDO::PARAM_STR);
	$q->execute();

	$res = $q->fetch(PDO::FETCH_ASSOC);
	$prezzo = $res['prezzo'];
	
	$q2 = "SELECT colore, url
	FROM immagini
	WHERE fascia = 'Basic'
	";

	$q3 = "SELECT colore, url
	FROM immagini
	WHERE fascia = 'Pro'
	";

	$q2 = $pdo->query($q2);
	$q3 = $pdo->query($q3);

	//CREAZIONE ARRAY PER GLI URL DELLE FOTO DEI TELEFONI DEI VARI COLORI DISPONIBILI
	$basicLinks = array(); 
	while ( $row = $q2->fetch() ) {
		$basicLinks[$row['colore']] = $row['url'];
	}
	$proLinks = array(); 
	while ( $row = $q3->fetch() ) {
		$proLinks[$row['colore']] = $row['url'];
	}

	if(substr($nome, -strlen("Pro")) == "Pro")
		$prima_src = $proLinks["Blu"];
	else
		$prima_src = $basicLinks["Blu"];

	$q2 = "SELECT n_carte
	FROM cards
	WHERE username = :u
	";

	$q2 = $pdo->prepare($q2);
	$q2->bindParam(':u', $_SESSION['session_user'], PDO::PARAM_STR);
	$q2->execute();

	$nCarte = $q2->rowCount();
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Vista Prodotto</title>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/vista-prodotto.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
</head>
<body>


	<!-- NAVBAR -->
	<?php 
		include 'navbar.php'
	?>


	<div class="options">
		<div class="dettagli-prodotto">

			<!-- AREA FOTO PRODOTTO -->
			<div class="area-immagine">
				<img src=<?php echo $prima_src?> class="image" />
			</div>


			<!-- AREA INFO PRODOTTO E TASTI -->
			<div class="area-info">

				<!-- INFORMAZIONI -->
				<div class="testo-area-info testo-primario-chiaro"><?php echo htmlspecialchars($nome)?></div>
				<div class="testo-area-info testo-secondario-chiaro"><?php echo htmlspecialchars($prezzo)?>€</div>


				
				<div>
					<!-- TASTI SELEZIONE STORAGE -->
					<div class="testo-area-info testo-primario-chiaro">Storage</div>
					<div class="storage griglia-tasti">
						<div class="tasto">
							<button class="pulsante testo-secondario-scuro memoria selected">64GB</button>
						</div>
						<div class="tasto">
							<button class="pulsante testo-secondario-scuro memoria">128GB</button>
						</div>
					</div>

					<!-- TASTI SELEZIONE COLORE -->
					<div class="testo-area-info testo-primario-chiaro">Colori</div>
					<div class="colori griglia-tasti">
						<div class="tasto">
							<button type="button" class="pulsante testo-secondario-scuro colore blu selected" data-name="Blu" data-colour="#2484E4">
								Blu
							</button>
						</div>
						<div class="tasto">
							<button type="button" class="pulsante testo-secondario-scuro colore rosso" data-name="Rosso" data-colour="#AF1E2D">
								Rosso
							</button>
						</div>
						<div class="tasto">
							<button type="button" class="pulsante testo-secondario-scuro colore nero" data-name="Nero" data-colour="#303030">
								Nero
							</button>
						</div>
						<div class="tasto">
							<button type="button" class="pulsante testo-secondario-scuro colore bianco" data-name="Bianco" data-colour="#f2f2f2">
								Bianco
							</button>
						</div>
					</div>

					<!-- AREA SELEZOINE CARTA E ACQUISTO -->
					<?php if (isset($_SESSION['session_id'])){
						
							if($nCarte > 0){
								echo "<select type='submit' class='selectpicker testo-primario-scuro tasto-acquista' >";
								while ($r = $q2->fetch()): 
									echo "<option>Carta n.".htmlspecialchars($r['n_carte'])."</option>";
								endwhile;		
									
							
								echo "		
									</select>
									<form method='POST' action='php/acquista.php?prod=".$nome."&cond=nuovo';>
										<input type='submit' class='btn-success compra' value='Acquista'/>
									</form>";
							}
							else{
								echo "<div class='testo-secondario-scuro tasto-acquista' style='text-align:center;'>Aggiungi una carta per fare acquisti</div>";
							}
						}
						else{
							echo "<div class='testo-secondario-scuro tasto-acquista' style='text-align:center;'>Accedi per poter fare acquisti</div>";
						}
					?>
				</div>
			</div>
		</div>

	</div>

	<!-- GESTIONE TASTI E BACKGROUND DINAMICI -->
    <script>
        window.onload = function () {
            const bottoni_colore = document.querySelectorAll('.colori .colore');
            const bottoni_storage = document.querySelectorAll('.storage .memoria');
            const area_immagine = document.querySelector('.area-immagine');
            const imm = document.querySelector('.area-immagine .image');

			//GESTIONE SELEZIONE STORAGE
            for (let i = 0; i < bottoni_storage.length; i++) {
                let btn = bottoni_storage[i];

                btn.addEventListener('click', function () {
                    document.querySelector('.storage .memoria.selected').classList.remove('selected');
                    this.classList.add('selected');
                });
			}
			
			//CAMBIO FOTO E BACKGROUND A SECONDA DEL COLORE SELEZIONATO
			var nome_prod = "<?php echo $nome; ?>";
			if(nome_prod.endsWith("Pro")){
				for (let i = 0; i < bottoni_colore.length; i++) {
					let btn = bottoni_colore[i];
					
					btn.addEventListener('click', function () {
						var links = <?php echo json_encode($proLinks); ?>;
						document.querySelector('.colori .colore.selected').classList.remove('selected');
						this.classList.add('selected');
						var imgsrc = links[this.dataset.name];
						imm.src = imgsrc;
						area_immagine.style.backgroundColor = this.dataset.colour;
					});
				}
			}
			else{
				for (let i = 0; i < bottoni_colore.length; i++) {
					let btn = bottoni_colore[i];
					var links = <?php echo json_encode($basicLinks); ?>;
					btn.addEventListener('click', function () {
						var links = <?php echo json_encode($proLinks); ?>;
						document.querySelector('.colori .colore.selected').classList.remove('selected');
						this.classList.add('selected');
						var imgsrc = links[this.dataset.name];
						imm.src = imgsrc;
						area_immagine.style.backgroundColor = this.dataset.colour;
					});
				}
			}
        }
    </script>

</body>
</html>