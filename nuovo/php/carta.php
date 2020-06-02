<?php
// stabilire connesssione con il database e inizializzare la sessione
session_start();
require_once('database.php');

// se dopo aver compilato il form della carta
if (isset($_POST['cardd'])) {
    $n_card = $_POST['ncard'] ?? '';
    $proprietario = $_POST['proprietario'] ?? '';
    $anno= $_POST['Year'] ?? '';
    $mese = $_POST['Month'] ?? '';
    $cvv=$_POST['cvv'] ?? '';


    $query = "
                INSERT INTO cards
                VALUES (0, :id, :n_carte, :proprietario, :anno, :mese, :cvv)
            ";
        
            $check = $pdo->prepare($query);
            $check->bindParam(':id', $_SESSION['session_identificatore'], PDO::PARAM_STR);
            $check->bindParam(':n_carte', $n_card, PDO::PARAM_STR);
            $check->bindParam(':proprietario', $proprietario, PDO::PARAM_STR);
            $check->bindParam(':anno', $anno, PDO::PARAM_STR);
            $check->bindParam(':mese', $mese, PDO::PARAM_STR);
            $check->bindParam(':cvv', $cvv, PDO::PARAM_STR);
            $check->execute();

            //la aggiunge con la query

            if ($check->rowCount() > 0) {
                $msg = 'Registrazione eseguita con successo';
                //$_SESSION['session_proprietario']= $proprietario;
                header("location: ../index.php");
            } else {
                $msg = 'Problemi con l\'inserimento dei dati %s';
            }
    
    printf($msg, '<a href="../index.php">torna indietro</a>');
    exit;

}
//elimina la carta 
elseif (isset($_GET['session_user'])) { 
    
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
//domanda ajax per vedre se la carta non esiste gia'
else{
    $query = "
            SELECT identificatore
            FROM cards
            WHERE n_carte = :n_carte and id = :id
        ";
        
        $check = $pdo->prepare($query);
        $check->bindParam(':n_carte', $_GET["numb"], PDO::PARAM_STR);
        $check->bindParam(':id', $_SESSION['session_identificatore'], PDO::PARAM_STR);
        $check->execute();
        
        $user = $check->fetchAll(PDO::FETCH_ASSOC);
        
        if (count($user) > 0) {
            $msg = 'Carta già in uso %s';
            echo "usato";
        } else {
            echo "Nusato";
        }
        exit;
}
?>

