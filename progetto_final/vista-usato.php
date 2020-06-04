<?php
	session_start();

	require_once('php/database.php');
	
    $nome = $_GET["prod"];
    $condizione = $_GET["cond"];
	$prezzo = $_GET["price"];
	
	$q = "SELECT immagine, colore, storage 
	FROM prodottiUsati
	WHERE nome = :n
	";

	$q = $pdo->prepare($q);
	$q->bindParam(':n', $nome, PDO::PARAM_STR);
	$q->execute();

	$res = $q->fetch(PDO::FETCH_ASSOC);
	$imgsrc = $res['immagine'];
	$col = $res['colore'];
	$storage = $res['storage'];

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
    
    <!-- OTTENIMENTO DESCRIZIONE DELLA CONDIZIONE DEL PRODOTTO -->
    <script>
        $(document).ready(function() {              
			var cond = "<?php echo $condizione ?>";
			$.ajax({    
				type: "GET",
				url: "php/info-condizione.php?cond=" + cond,             
				dataType: "text",                   
				success: function(data){                    
					$(".aiuto").text(data); 
				}
			});
        });
    </script>

</head>
<body>


	<!-- NAVBAR -->
	<?php 
		include 'navbar.php'
	?>


	<div class="options">
		<div class="dettagli-prodotto">
			<!-- SEZIONE FOTO PRODOTTO -->
			<?php if($col == "Bianco") echo '<div class="area-immagine-bianca">'; else echo '<div class="area-immagine-nera">';?>
				<img src=<?php echo $imgsrc?> class="image" />
			</div>
			<!-- SEZIONE INFO PRODOTTO E TASTI SELEZIONE -->
			<div class="area-info">
				<!-- INFORMAZIONI -->
				<div class="testo-area-info testo-primario-chiaro"><?php echo htmlspecialchars($nome)?></div>
				<div class="testo-area-info testo-secondario-chiaro"><?php echo htmlspecialchars($prezzo)?></div>
                <div class="condizione testo-area-info testo-secondario-chiaro"><?php echo htmlspecialchars($condizione)?>
                    <span class="aiuto">help</span> 
				</div>
				
				
				<div>
					<!-- AREA STORAGE -->
					<div class="testo-area-info testo-primario-chiaro">Storage</div>
					<div class="storage griglia-tasti">
						<div class="tasto">
							<button class="pulsante memoria"><?php echo htmlspecialchars($storage); echo htmlspecialchars("GB");?></button>
						</div>
					</div>

					<!-- AREA COLORE -->
					<div class="testo-area-info testo-primario-chiaro">Colore</div>
					<div class="colori griglia-tasti">
						<div class="tasto">
							<button type="button" class="pulsante colore nero selected" data-name="black">
								<?php echo htmlspecialchars($col)?>
							</button>
						</div>
						
					</div>

					<!-- AREA SELEZIONE CARTA E ACQUISTO -->
					<?php if (isset($_SESSION['session_id'])){
						
						if($nCarte > 0){
							echo "<select type='submit' class='selectpicker testo-primario-scuro tasto-acquista' >";
							while ($r = $q2->fetch()): 
								echo "<option>Carta n.".htmlspecialchars($r['n_carte'])."</option>";
							endwhile;		
								
						
							echo "		
								</select>
								<form method='POST' action='php/acquista.php?prod=".$nome."&cond=usato';>
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

</body>
</html>