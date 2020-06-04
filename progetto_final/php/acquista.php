<?php
    require_once('database.php');
    session_start();

    $nome = $_GET["prod"];
    $cond = $_GET["cond"];

    if (isset($_SESSION['session_id'])) {
        $q = "INSERT INTO acquisti (nome_utente, nome_prodotto, data, condizione)
        VALUES (:u, :p, :d, :c)
        ";
        $q = $pdo->prepare($q);
        $q->bindParam(':u', $_SESSION['session_user'], PDO::PARAM_STR);
        $q->bindParam(':p', $nome, PDO::PARAM_STR);
        $q->bindParam(':d', date("Y-m-d H:i:s"));
        $q->bindParam(':c', $cond, PDO::PARAM_STR);
        $q->execute();
    }
    
    echo "<script>
        alert('Acquisto effettuato con successo');
        window.location.href='../index.php';
        </script>";
    
?>