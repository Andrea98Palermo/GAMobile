<?php 
    require_once('database.php');
  
    $condizione = $_GET["cond"];
    $q = "SELECT descrizione
        FROM categorieUsato
        WHERE nome = :n
        ";

	$q = $pdo->prepare($q);
	$q->bindParam(':n', $condizione, PDO::PARAM_STR);
	$q->execute();

	$res = $q->fetch(PDO::FETCH_ASSOC);
	$descrizione = $res['descrizione'];
    echo $descrizione;
?> 