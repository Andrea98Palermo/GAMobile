var controllo=0; // variabile globale per fare il controllo, senno' non ho il tempo per domandare al database e tornare indietro

//funzione per validare il form di Login, controllo per dare il tempo al database per controllare le credenziali.(cliccare due volte)
function validaFormLogin(){
        setupp();
        if(controllo==0){
            return false;
        }
        window.alert("accesso eseguito");
        return true;
}

// controllo parte appena si lascia il campo del form
$(document.loginForm).ready(setupp);

    function setupp(){
        $("#username1").on("blur",controlla_User);
        $("#username1").focus();
        $("#password1").on("blur",controlla_pass);
    }

    function setuppp(){
        $("#password1").on("blur",controlla_pass);
        $("#password1").focus();
    }


    // Controlla le credenziali dello user se sono giuste e se effetivamente esiste nel database
    function controlla_User(){
        let username_in=$("#username1").val();
        $.get("./php/register.php",{user:username_in},rispo);
    }

    //risposta dell'ajax all'esistenza dello user nel database, se usato o non, poi valida o no il campo form.
    function rispo(risposta){
        if(risposta=="Nusato"){
            $("#username1").val(("")).attr("placeholder","non esistente")
            $("#username1").attr("class", "campo-form form-control is-invalid");
            $("#username1").focus();
        }
        if($("#username1").val().length !==0){
            $("#username1").attr("class", "campo-form form-control is-valid");
        }
    }


    // funzione controlla password, qui conrollo se l'associazione user e password e' giusta.
    function controlla_pass(){
        let username_ins=$("#username1").val();
        let password_ins=$("#password1").val();
        $.get("./php/login.php",{userr:username_ins,passw:password_ins},rispostaServer);
    }

    // risposta del database se password e user coincidono.
    function rispostaServer(risposta){
        if(risposta!=="Nesatte"){
            invalida_usern("Credenziali errate");
        }else{
        controllo=1;
        }
    }

    //funzione che prende la stringa di errore e visualizza il messaggio di errore e rende il campo non valido.
    function invalida_usern(messaggio){
        $("#password1").val(("")).attr("placeholder",messaggio)
        $("#password1").attr("class", "campo-form form-control is-invalid");
    }