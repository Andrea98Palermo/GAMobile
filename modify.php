<?php
session_start();
require_once('database.php');

if (isset($_POST['modify'])) {
    //$id = $_POST['idM'] ?? '';
	$username = $_POST['usernameM'] ?? '';
    $password = $_POST['passwordM'] ?? '';
    $email= $_POST['emailM'] ?? '';
	$indirizzo = $_POST['indirizzoM'] ?? '';
	
	/*$query = "
            SELECT id
            FROM users
            WHERE username = :username
        ";
        
        $check = $pdo->prepare($query);
        $check->bindParam(':username', $_SESSION['session_user'], PDO::PARAM_STR);
		$check->execute();
		
		$user = $check->fetchAll(PDO::FETCH_ASSOC);
		echo 'ciao ',count($user),' ';*/

            $query = "
				UPDATE users
				SET username= :username, email= :email, indirizzo= :indirizzo
                WHERE id= :id
            ";
        
			$check = $pdo->prepare($query);
            //$check->bindParam(':id', $id, PDO::PARAM_STR);
            $check->bindParam(':id', $_SESSION['session_identificatore'], PDO::PARAM_STR);
            $check->bindParam(':username', $username, PDO::PARAM_STR);
            //$check->bindParam(':password', $password_hash, PDO::PARAM_STR);
            $check->bindParam(':email', $email, PDO::PARAM_STR);
			$check->bindParam(':indirizzo', $indirizzo, PDO::PARAM_STR);
            $check->execute();
            
            if ($check->rowCount() > 0) {
                $msg = 'Registrazione eseguita con successo';
                $_SESSION['session_user'] = $username;
                //$_SESSION['session_password'] = $user['password'];
                $_SESSION['session_email'] = $email;
                $_SESSION['session_indirizzo'] = $indirizzo;
                $_SESSION['session_identificatore'] = $id;
                header("location: ../index.php");
            } else {
                //echo $_SESSION['session_identificatore'];
                $msg = 'Problemi con l\'inserimento dei dati %s ';
                
            }
    
    printf($msg, '<a href="../index.php">torna indietro</a>');
    exit;
}else{
    //$usernn=$_GET["usern"];
    

        $query = "
            SELECT id
            FROM users
            WHERE username = :username
        ";
        
        $check = $pdo->prepare($query);
        //$check->bindParam(':username', $username, PDO::PARAM_STR);
        $check->bindParam(':username', $_GET["usernn"], PDO::PARAM_STR);
        $check->execute();
        
        $user = $check->fetchAll(PDO::FETCH_ASSOC);
        //echo $_GET['usern'];
        //exit;
        if ($_SESSION['session_user']==$_GET["usernn"]){
            echo "Nusato";
            //exit;
        }
        elseif (count($user) > 0) {
            $msg = 'Username già in uso %s';
            echo "usato";
        } else {
            echo "Nusato";
            //$query = "
              //  INSERT INTO users
                //VALUES (0, :username, :password)
            //";
        }
        exit;
    
}
?>

