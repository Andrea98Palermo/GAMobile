/*AUTORE: GIUSEPPE D'IGNAZIO*/

// funzione per validare l'invio del form della card
function validaFormCarta(){
    if (validaCvv()==true){
    return true;
    }
    else{
        return false;
    }
}

// funzione per validare i numeri della carta controllo se sono numeri se sono 16 e poi invia l'ajax per vedere se gia' presente nel database
function validaNumeri(){
    if (isNaN($("#ncard").val()) || $("#ncard").val().length!==16){
        $("#ncard").val(("")).attr("placeholder","inserire 16 numeri")
        $("#ncard").attr("class", "numero-carta form-control is-invalid");
        $("#ncard").focus();
    }else{
        let user_numb=$("#ncard").val();
        $.get("php/carta.php",{numb:user_numb},rrrr);
    }
}

//risposta del database se la carta usata o non usata, rende il form valido o non valido
function rrrr(risposta){
    if(risposta!="Nusato"){
        $("#ncard").val(("")).attr("placeholder","carta gia in uso");
        $("#ncard").attr("class", "numero-carta form-control is-invalid");
    }
    if($("#ncard").val().length !==0){
        $("#ncard").attr("class", "numero-carta form-control is-valid");
    }
}


// valida il campo del proprietario, tutte lettere e nome e cognome, non faccio il controllo, perche' ci puo' essere lo stesso proprietario per carte diverse
function validaProprietario(){
    var letters = /^[A-Za-z]+$/i;
    if( $("#proprietario").val().match(letters)){
        $("#proprietario").val(("")).attr("placeholder","inserire credenziali proprietario")
        $("#proprietario").attr("class", "numero-carta form-control is-invalid");
        $("#proprietario").focus();
    }
    $("#ncard").attr("class", "numero-carta form-control is-valid");
    
}

// serve per validare il cvv quindi 3 o 4 numeri .
function validaCvv(){
    var nn=$("#cvv").val().length;
    if (nn<3 || nn>4 ){
        $("#cvv").val(("")).attr("placeholder","inserire 3 o 4 num")
        $("#cvv").attr("class", "form-control is-invalid");
        $("#cvv").focus();
    }
    else{
    $("#cvv").attr("class", "form-control is-valid");
    return true}
}

// appena si lascia un campo lo si controlla subito e da qui richiamiamo i vari controlli. 
$(document.cardForm).ready(setup);

    function setup(){
        $("#ncard").on("blur",validaNumeri);
        $("#ncard").focus();
        $("#proprietario").on("blur",validaProprietario);
        $("#cvv").on("blur",validaCvv);    
    }