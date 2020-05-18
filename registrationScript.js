var controllo1=0;

function validaFormRegister(){
    confirmPassword();
    if (controllo1==1){
        window.alert("registrazione andata a buon fine!");
        controllo1=0;
        return true;
    }
    return false;
}


function controllaUsername(){
    //document.registrationForm.username.value.length
    var use=$("#username").val().length;
    var us = $("#username").val();
    var re = /^[a-z0-9]+$/i;
    //if (!re.test(use)) {
    //alert('Puoi inserire solo lettere e numeri!');    
    //}
    if (!re.test(us) || use>20 || use<3) {
        //username.setCustomValidity("Compreso tra i 3 e i 20 caratteri alfanumerici");
        return true;
    }
    //username.setCustomValidity('')
    return false;
}

function controllaPassword(){
    //var lun=document.registrationForm.password.value.length;
    var pas=$("#password").val().length;
    if (pas>20 || pas<8) {
        $("#password").val(("")).attr("placeholder","tra 8 e 20 caratteri alfanumerici")
        $("#password").attr("class", "campo-form form-control is-invalid");
        $("#password").focus();
        //password.setCustomValidity("Compreso tra i 8 e i 20 caratteri alfanumerici");
        //return false;
    }
    else{
        $("#password").attr("class", "campo-form form-control is-valid");
    }
    //password.setCustomValidity('')
    //return true;
}


function confirmPassword(){
    //document.registrationForm.password.value;
    var pas2=$("#password2").val();
    var pas=$("#password").val();
    if (pas2 != pas) {
        $("#password2").val(("")).attr("placeholder","non corrisponde alla password")
        $("#password2").attr("class", "campo-form form-control is-invalid");
        //$("#password2").focus();
        //password2.setCustomValidity("Passwords don't match");
        //return false;
    }else{
        $("#password2").attr("class", "campo-form form-control is-valid");  
        controllo1=1;
    }
    //password2.setCustomValidity('')
    //return true;

}


$(document.registrationForm).ready(setup);

    function setup(){
        //window.alert("aaa")
        //$("#username").on("blur",controllaUsername);
        $("#username").on("blur",controlla_doppioni);
        $("#username").focus();
        $("#password").on("blur",controllaPassword);
        $("#password").focus();
        $("#password2").on("blur",confirmPassword);
        $("#password2").focus();
    
    }

    function controlla_doppioni(){
        if (controllaUsername()==true){
            invalida_username("compreso tra i 3 e i 20 caratteri alfanumerici");
        }
        let username_inserito=$("#username").val();
        $.get("./php/register.php",{user:username_inserito},risposta_server);
    }

    function risposta_server(risposta){
        if(risposta!=="Nusato"){
            invalida_username("gia in uso");
            //username.setCustomValidity("gia in uso");
            //$("#username").attr("class", "campo-form form-control is-invalid");
            //$("#username").focus();
        }
        if($("#username").val().length !==0){
            $("#username").attr("class", "campo-form form-control is-valid");
        }
    }

    function invalida_username(messaggio){
        $("#username").val(("")).attr("placeholder",messaggio)
        $("#username").attr("class", "campo-form form-control is-invalid");
        //username.setCustomValidity("gia in uso")
        $("#username").focus();
    }

