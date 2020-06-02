<?php
// stabilire connesssione con il database e inizializzare la sessione
session_start();
require_once('database.php');

//elimina la carta 
if (isset($_SESSION['session_id'])) { 
    
    $sql = "DELETE FROM cards WHERE identificatore =  :identificatore";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':identificatore',  $_GET["eliminare"], PDO::PARAM_INT);   
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $msg = 'Eliminazione eseguita con successo';
        header("location: ../index.php");
    } else {
        $msg = 'Problemi aa ';
    }
    printf($msg, '<a href="../index.php">torna indietro</a>');
    exit;
}
?>