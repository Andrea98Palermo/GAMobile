/*AUTORE: GIUSEPPE D'IGNAZIO*/

var controllo1=0;// variabile di controllo per dare tempo al database di fare il controllo

//funzione per controllare i campi prima di inviare i dati al database
function validaFormRegister(){
    confirmPassword();
    if (controllo1==1){
        window.alert("registrazione andata a buon fine!");
        controllo1=0;
        return true;
    }
    return false;
}

// controllo se lo username e' valido quindi lunghezza, caratteri 
function controllaUsername(){
    var use=$("#username").val().length;
    var us = $("#username").val();
    var re = /^[a-z0-9]+$/i;
    if (!re.test(us) || use>20 || use<3) {
        return true;
    }
    return false;
}

//funzione per controllo password, quindi lunghezza e rende il campo valido se va bene o non valido altrimenti
function controllaPassword(){
    var pas=$("#password").val().length;
    if (pas>20 || pas<8) {
        $("#password").val(("")).attr("placeholder","tra 8 e 20 caratteri alfanumerici")
        $("#password").attr("class", "campo-form form-control is-invalid");
        $("#password").focus();
    }
    else{
        $("#password").attr("class", "campo-form form-control is-valid");
    }
}

// funzione di conferma della password, quindi se corrisponde alla password immessa
function confirmPassword(){
    var pas2=$("#password2").val();
    var pas=$("#password").val();
    if (pas2 != pas) {
        $("#password2").val(("")).attr("placeholder","non corrisponde alla password")
        $("#password2").attr("class", "campo-form form-control is-invalid");
    }else{
        $("#password2").attr("class", "campo-form form-control is-valid");  
        controllo1=1;
    }
}

// appena si lascia un campo allora parte il controllo
$(document.registrationForm).ready(setup);

    function setup(){
        $("#username").on("blur",controlla_doppioni);
        $("#username").focus();
        $("#password").on("blur",controllaPassword);
        $("#password").focus();
        $("#password2").on("blur",confirmPassword);
        $("#password2").focus();
    
    }

    //controllo se ci sono doppioni con ajax, dopo aver chiamato la funzione per la validita' dello username
    function controlla_doppioni(){
        if (controllaUsername()==true){
            invalida_username("compreso tra i 3 e i 20 caratteri alfanumerici");
        }
        let username_inserito=$("#username").val();
        $.get("./php/register.php",{user:username_inserito},risposta_server);
    }

    //risposta database per vedere se username usato o meno, chiama l'invalida user per invalidare, lo valida altrimenti
    function risposta_server(risposta){
        if(risposta!=="Nusato"){
            invalida_username("gia in uso");
        }
        if($("#username").val().length !==0){
            $("#username").attr("class", "campo-form form-control is-valid");
        }
    }

    // invalida username con il messaggio di errore
    function invalida_username(messaggio){
        $("#username").val(("")).attr("placeholder",messaggio)
        $("#username").attr("class", "campo-form form-control is-invalid");
        $("#username").focus();
    }

