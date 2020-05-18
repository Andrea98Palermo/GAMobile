<?php
session_start();
require_once('database.php');

if (isset($_SESSION['session_id'])) {
    header('Location: ./dashboard.php');
    exit;
}

if (isset($_POST['login'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (empty($username) || empty($password)) {
        $msg = 'Inserisci username e password %s';
    } else {
        $query = "
            SELECT username, password, email, indirizzo, id
            FROM users
            WHERE username = :username
        ";
        
        $check = $pdo->prepare($query);
        $check->bindParam(':username', $username, PDO::PARAM_STR);
        $check->execute();

        
        $user = $check->fetch(PDO::FETCH_ASSOC);
        
        if (!$user || password_verify($password, $user['password']) === false) {
            $msg = 'Credenziali utente errate %s';
        } else {
            
            session_regenerate_id();
            $_SESSION['session_id'] = session_id();
            $_SESSION['session_user'] = $user['username'];
            //$_SESSION['session_password'] = $user['password'];
            $_SESSION['session_email'] = $user['email'];
            $_SESSION['session_indirizzo'] = $user['indirizzo'];
            $_SESSION['session_identificatore'] = $user['id'];
            
            header('Location: ../index.php');
            exit;
        }
    }
    
    printf($msg, '<a href="../index.php">torna indietro</a>');
}
else{
    $query = "
            SELECT username, password
            FROM users
            WHERE username = :username
        ";
        
        $check = $pdo->prepare($query);
        $check->bindParam(':username', $_GET["userr"], PDO::PARAM_STR);
        $check->execute();
        
        $user = $check->fetch(PDO::FETCH_ASSOC);
        
        if (!$user || password_verify( $_GET["passw"], $user['password']) === false) {
            //$msg = 'Credenziali utente errate %s';
            echo "esatte";
        } else {
            //session_regenerate_id();
            //$_SESSION['session_id'] = session_id();
            //$_SESSION['session_user'] = $user['username'];
            echo "Nesatte";
            //header('Location: ../index.php');
            //exit;
        }
}


   