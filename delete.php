<?php
require_once('database.php');
session_start();

if (isset($_SESSION['session_id'])) {
    unset($_SESSION['session_id']);
    $sql = "DELETE FROM users WHERE username =  :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $_GET['usern'], PDO::PARAM_INT);   
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $msg = 'Eliminazione eseguita con successo';
        header("location: ../index.php");
    } else {
        $msg = 'Problemi ';
    }
    printf($msg, '<a href="../index.php">torna indietro</a>');
    exit;
}
?>