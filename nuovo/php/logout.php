<?php
//  inizializzare la sessione
session_start();

//disattivare l'id se attivo
if (isset($_SESSION['session_id'])) {
    unset($_SESSION['session_id']);
}
header('Location: ../index.php');
exit;
?>