<?php
session_start();
require_once('database.php');
//require('database.php');

if (isset($_POST['cardd'])) {         /////aggiunge
    $n_card = $_POST['N_card'] ?? '';
    $proprietario = $_POST['proprietario'] ?? '';
    $anno= $_POST['Year'] ?? '';
    $mese = $_POST['Month'] ?? '';
    $cvv=$_POST['cvv'] ?? '';


    $query = "
                INSERT INTO cards
                VALUES (:id, :n_carta, :proprietario, :anno, :mese, :cvv)
            ";
        
            $check = $pdo->prepare($query);
            $check->bindParam(':id', $_SESSION['session_identificatore'], PDO::PARAM_STR);
            $check->bindParam(':n_carta', $n_card, PDO::PARAM_STR);
            $check->bindParam(':proprietario', $proprietario, PDO::PARAM_STR);
            $check->bindParam(':anno', $anno, PDO::PARAM_STR);
            $check->bindParam(':mese', $mese, PDO::PARAM_STR);
            $check->bindParam(':cvv', $cvv, PDO::PARAM_STR);
            $check->execute();
            
            if ($check->rowCount() > 0) {
                $msg = 'Registrazione eseguita con successo';
                $_SESSION['session_proprietario']= $proprietario;
                header("location: ../index.php");
            } else {
                $msg = 'Problemi con l\'inserimento dei dati %s';
            }
    
    printf($msg, '<a href="../index.php">torna indietro</a>');
    exit;

}
elseif (isset($_SESSION['session_id'])) { /////elimina
    
    $sql = "DELETE FROM cards WHERE id =  :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $_SESSION['session_identificatore'], PDO::PARAM_INT);   
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $msg = 'Eliminazione eseguita con successo';
        unset($_SESSION['session_proprietario']);
        header("location: ../index.php");
    } else {
        $msg = 'Problemi ';
    }
    printf($msg, '<a href="../index.php">torna indietro</a>');
    exit;
}
?>

