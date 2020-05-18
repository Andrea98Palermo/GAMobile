function validaFormCarta(){
    //risp=validaNumeri();
    //ris=validaProprietario();
    //window.alert($("#ncard").val());
    validaCvv();
    //window.alert(document.cardForm.ncard.value);
    //window.alert(risp);
    return true;
}

function validaNumeri(){
    //window.alert("$['#ncard']");
    //window.alert(document.cardForm.ncard.value.length);
    //var num=document.cardForm.ncard.value.length;
    if (isNaN($("#ncard").val()) || $("#ncard").val().length!=16){
        //ncard.setCustomValidity("inserire 16 numeri");
        //return true;
        $("#ncard").val(("")).attr("placeholder","inserire 16 numeri")
        $("#ncard").attr("class", "card-number form-control is-invalid");
        //username.setCustomValidity("gia in uso")
        $("#ncard").focus();
    }else{
    //ncard.setCustomValidity('');
    //return false;
    $("#ncard").attr("class", "card-number form-control is-valid");
    //$("#ncard").focus();
    }
}

function validaProprietario(){
    var letters = /^[A-Za-z]+$/i;
    if( $("#proprietario").val().match(letters)){
        //window.alert("yess")
        //proprietario.setCustomValidity("inserire credenziali proprietario");
        //return true;
        $("#proprietario").val(("")).attr("placeholder","inserire credenziali proprietario")
        $("#proprietario").attr("class", "card-number form-control is-invalid");
        //username.setCustomValidity("gia in uso")
        $("#proprietario").focus();
    }
    //proprietario.setCustomValidity('');
    //return false;
    $("#ncard").attr("class", "card-number form-control is-valid");
    
}

function validaCvv(){
    var nn=$("#cvv").val().length;
    if (nn<3 || nn>4 ){
        $("#cvv").val(("")).attr("placeholder","inserire 3 o 4 num")
        $("#cvv").attr("class", "form-control is-invalid");
        //username.setCustomValidity("gia in uso")
        $("#cvv").focus();
    }
    $("#cvv").attr("class", "form-control is-valid");
}

$(document.cardForm).ready(setup);

    function setup(){
        //window.alert("aaa");
        //$("#username").on("blur",controllaUsername);
        $("#ncard").on("blur",validaNumeri);
        //$("#ncard").focus();
        $("#proprietario").on("blur",validaProprietario);
        //$("#proprietario").focus();
        $("#cvv").on("blur",validaCvv);
        //$("#cvv").focus();
    
    }