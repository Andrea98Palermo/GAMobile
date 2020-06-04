<?php
//stabilire connessione con database
require_once('database.php');

//se veniamo da registrazione allora facciamo un ulteriore controllo di sicurezza
if (isset($_POST['register'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $email= $_POST['email'] ?? '';
    $indirizzo = $_POST['indirizzo'] ?? '';
    $isUsernameValid = filter_var(
        $username,
        FILTER_VALIDATE_REGEXP, [
            "options" => [
                "regexp" => "/^[a-z\d_]{3,20}$/i"
            ]
        ]
    );
    $pwdLenght = mb_strlen($password);
    
    if (empty($username) || empty($password)) {
        $msg = 'Compila tutti i campi %s';
    } elseif (false === $isUsernameValid) {
        $msg = 'Lo username non è valido. Sono ammessi solamente caratteri 
                alfanumerici e l\'underscore. Lunghezza minina 3 caratteri.
                Lunghezza massima 20 caratteri';
    } elseif ($pwdLenght < 8 || $pwdLenght > 20) {
        $msg = 'Lunghezza minima password 8 caratteri.
                Lunghezza massima 20 caratteri';
    } else {
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        // criptiamo la password per renderla sicura e dopo controlliamo se l'utente non e' gia' stato utilizzato

        $query = "
            SELECT id
            FROM users
            WHERE username = :username
        ";
        
        $check = $pdo->prepare($query);
        $check->bindParam(':username', $username, PDO::PARAM_STR);
        $check->execute();
        
        $user = $check->fetchAll(PDO::FETCH_ASSOC);
        
        if (count($user) > 0) {
            $msg = 'Username già in uso %s';
        } else {
            // facciamo la query
            $query = "
                INSERT INTO users
                VALUES (0, :username, :password, :email, :indirizzo)
            ";
        
            $check = $pdo->prepare($query);
            $check->bindParam(':username', $username, PDO::PARAM_STR);
            $check->bindParam(':password', $password_hash, PDO::PARAM_STR);
            $check->bindParam(':email', $email, PDO::PARAM_STR);
            $check->bindParam(':indirizzo', $indirizzo, PDO::PARAM_STR);
            $check->execute();

            if ($check->rowCount() > 0) {
                $msg = 'Registrazione eseguita con successo';
                header("location: ../index.php");
            } else {
                $msg = 'Problemi con l\'inserimento dei dati %s';
            }
        }
    }
    
    printf($msg, '<a href="../index.php">torna indietro</a>');
    exit;
}
// controllo per l'ajax se utente e' esistente
else{
    $query = "
            SELECT id
            FROM users
            WHERE username = :username
        ";
        
        $check = $pdo->prepare($query);
        //$check->bindParam(':username', $username, PDO::PARAM_STR);
        $check->bindParam(':username', $_GET["user"], PDO::PARAM_STR);
        $check->execute();
        
        $user = $check->fetchAll(PDO::FETCH_ASSOC);
        //se esistente allora usato altrimenti si puo' andare avanti quindi Nusato
        if (count($user) > 0) {
            $msg = 'Username già in uso %s';
            echo "usato";
        } else {
            echo "Nusato";
        }
        exit;
}