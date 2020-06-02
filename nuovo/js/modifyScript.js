// funzione che valida l'invio del form per la modifica dati, non ho messo un controllo specifico perche' se credenziali sbagliate allore non le cambia.
function validaMod(){
}

// appena si lascia un campo form allora parte il controllo
$(document.modifyForm).ready(setupppp);

    function setupppp(){
        $("#usernameM").on("blur",controlla_dopp);
        $("#usernameM").focus();
        $("#passwordM").on("blur",controllaPass);
        $("#passwordM").focus();
        $("#password2M").on("blur",confirmPass);
        $("#password2M").focus();
    }


    // funziona controllo della password nuova se e' valida la lunghezza 
    function controllaPass(){
        var pas=$("#passwordM").val().length;
        if (pas>20 || pas<8) {
            $("#passwordM").val(("")).attr("placeholder","tra 8 e 20 caratteri alfanumerici")
            $("#passwordM").attr("class", "campo-form form-control is-invalid");
            $("#passwordM").focus();
        }
        else{
            $("#passwordM").attr("class", "campo-form form-control is-valid");
        }
    }


    // funzione che controlla se la password di conferma per la password nuova
    function confirmPass(){
        var pas2=$("#password2M").val();
        var pas=$("#passwordM").val();
        if (pas2 != pas) {
            $("#password2M").val(("")).attr("placeholder","non corrisponde alla password")
            $("#password2M").attr("class", "campo-form form-control is-invalid");
            $("#password2M").focus();
        }else{
            $("#password2M").attr("class", "campo-form form-control is-valid");  
            controllo1=1;
        }
    }


    // controllo i doppioni, ma prima chiamo il controllo su user per vedere se valido
    function controlla_dopp(){
        if (controllaUser()==true){
            invalida_user("compreso tra i 3 e i 20 caratteri alfanumerici");
        }
        else{
        let username_inserr=$("#usernameM").val();
        $.get("./php/modify.php",{usernn:username_inserr},risposta_serv);
        }
    }

    // risposta database per vedere se esistente o non, rende il campo valido o non.
    function risposta_serv(risposta){
        if(risposta!=="Nusato"){
            invalida_user("gia in uso");
        }
        if($("#usernameM").val().length !==0){
            $("#usernameM").attr("class", "campo-form form-control is-valid");
        }
    }

    // funzione che viene chiamata per rendere il campo non valido e stampa il tempo di errore nel placeholder.
    function invalida_user(messaggio){
        $("#usernameM").val(("")).attr("placeholder",messaggio)
        $("#usernameM").attr("class", "campo-form form-control is-invalid");
        $("#usernameM").focus();
    }

    // funzione per il controllo del nuovo user, quindi lunghezza e se ha caratteri alfanumerici, o se gia' esistente
    function controllaUser(){
        var use=$("#usernameM").val().length;
        var us = $("#usernameM").val();
        var re = /^[a-z0-9]+$/i;
        if (!re.test(us) || use>20 || use<3) {
            return true;
        }
        return false;
    }

