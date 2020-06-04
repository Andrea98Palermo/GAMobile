<?php
// stabilire connesssione con il database e inizializzare la sessione
session_start();
require_once('database.php');

// se proviene da modifica dati profilo
if (isset($_POST['modify'])) {
	$username = $_POST['usernameM'] ?? '';
    $password = $_POST['passwordM'] ?? '';
    $email= $_POST['emailM'] ?? '';
	$indirizzo = $_POST['indirizzoM'] ?? '';
    
    // se la password non e' stata immessa allora modifichiamo tutto senza fare problemi
	if ($password==''){

            $query = "
				UPDATE users
				SET username= :username, email= :email, indirizzo= :indirizzo
                WHERE id= :id
            ";
        
			$check = $pdo->prepare($query);
            $check->bindParam(':id', $_SESSION['session_identificatore'], PDO::PARAM_STR);
            $check->bindParam(':username', $username, PDO::PARAM_STR);
            $check->bindParam(':email', $email, PDO::PARAM_STR);
			$check->bindParam(':indirizzo', $indirizzo, PDO::PARAM_STR);
            $check->execute();

            
            if ($check->rowCount() >= 0) {
                $msg = 'Registrazione eseguita con successo';
                // riscriviamo le sessioni che sono cambiate, le mettiamo a null prima perche' senno' da errore nel sovrascrivere
                $_SESSION['session_user'] = null;
                $_SESSION['session_email'] = null;
                $_SESSION['session_indirizzo'] = null;
                $_SESSION['session_user'] = $username;
                $_SESSION['session_email'] = $email;
                $_SESSION['session_indirizzo'] = $indirizzo;
                header("location: ../index.php");
            } else {
                $msg = 'Problemi con l\'inserimento dei dati %s ';
                
            }
        } 
        // se password ci sta allora la criptiamo e modifichiamo tutto
        else{
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

            $query = "
				UPDATE users
				SET username= :username, password= :password, email= :email, indirizzo= :indirizzo
                WHERE id= :id
            ";
        
			$check = $pdo->prepare($query);
            $check->bindParam(':id', $_SESSION['session_identificatore'], PDO::PARAM_STR);
            $check->bindParam(':username', $username, PDO::PARAM_STR);
            $check->bindParam(':password', $password_hash, PDO::PARAM_STR);
            $check->bindParam(':email', $email, PDO::PARAM_STR);
			$check->bindParam(':indirizzo', $indirizzo, PDO::PARAM_STR);
            $check->execute();

            
            if ($check->rowCount() >= 0) {
                // riscriviamo le sessioni che sono cambiate, le mettiamo a null prima perche' senno' da errore nel sovrascrivere
                $msg = 'Registrazione eseguita con successo';
                $_SESSION['session_user'] = null;
                $_SESSION['session_email'] = null;
                $_SESSION['session_indirizzo'] = null;
                $_SESSION['session_user'] = $username;
                $_SESSION['session_email'] = $email;
                $_SESSION['session_indirizzo'] = $indirizzo;
                header("location: ../index.php");
            } else {
                $msg = 'Problemi con l\'inserimento dei dati %s ';
                
            }
        
    }
    printf($msg, '<a href="../index.php">torna indietro</a>');
    exit;

}
// per l'ajax facciamo un controllo dello username
else{    

        $query = "
            SELECT id
            FROM users
            WHERE username = :username
        ";
        
        $check = $pdo->prepare($query);
        $check->bindParam(':username', $_GET["usernn"], PDO::PARAM_STR);
        $check->execute();
        
        $user = $check->fetchAll(PDO::FETCH_ASSOC);

        // qui abbiamo tre possibilita' se ustao se non cambia e se e' nuovo e non usato
        if ($_SESSION['session_user']==$_GET["usernn"]){
            echo "Nusato";
        }
        elseif (count($user) > 0) {
            $msg = 'Username già in uso %s';
            echo "usato";
        } else {
            echo "Nusato";
        }
    exit;
    
}
?>

