$(document.modifyForm).ready(setupppp);

    function setupppp(){
        //window.alert("aaa")
        //$("#username").on("blur",controllaUsername);
        $("#usernameM").on("blur",controlla_dopp);
        $("#usernameM").focus();
        $("#passwordM").on("blur",controllaPass);
        $("#passwordM").focus();
        $("#password2M").on("blur",confirmPass);
        $("#password2M").focus();
    }

    //var controllo1=0;

/*function validaFormRegister(){
    confirmPassword();
    if (controllo1==1){
        window.alert("registrazione andata a buon fine!");
        controllo1=0;
        return true;
    }
    return false;
}*/


function controllaUser(){
    //document.registrationForm.username.value.length
    var use=$("#usernameM").val().length;
    var us = $("#usernameM").val();
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

function controllaPass(){
    //var lun=document.registrationForm.password.value.length;
    var pas=$("#passwordM").val().length;
    if (pas>20 || pas<8) {
        $("#passwordM").val(("")).attr("placeholder","tra 8 e 20 caratteri alfanumerici")
        $("#passwordM").attr("class", "campo-form form-control is-invalid");
        $("#passwordM").focus();
        //password.setCustomValidity("Compreso tra i 8 e i 20 caratteri alfanumerici");
        //return false;
    }
    else{
        $("#passwordM").attr("class", "campo-form form-control is-valid");
    }
    //password.setCustomValidity('')
    //return true;
}


function confirmPass(){
    //document.registrationForm.password.value;
    var pas2=$("#password2M").val();
    var pas=$("#passwordM").val();
    if (pas2 != pas) {
        $("#password2M").val(("")).attr("placeholder","non corrisponde alla password")
        $("#password2M").attr("class", "campo-form form-control is-invalid");
        $("#password2M").focus();
        //password2.setCustomValidity("Passwords don't match");
        //return false;
    }else{
        $("#password2M").attr("class", "campo-form form-control is-valid");  
        controllo1=1;
    }
    //password2.setCustomValidity('')
    //return true;

}



    function controlla_dopp(){
        if (controllaUser()==true){
            invalida_user("compreso tra i 3 e i 20 caratteri alfanumerici");
            //break;
        }
        else{
        //if ($("usernameM").val()==$_SESSION['session_user'])
        let username_inserr=$("#usernameM").val();
        $.get("./php/modify.php",{usernn:username_inserr},risposta_serv);
        }
    }

    function risposta_serv(risposta){
        //window.alert(risposta);
        if(risposta!=="Nusato"){
            invalida_user("gia in uso");
            //username.setCustomValidity("gia in uso");
            //$("#username").attr("class", "campo-form form-control is-invalid");
            //$("#username").focus();
        }
        if($("#usernameM").val().length !==0){
            $("#usernameM").attr("class", "campo-form form-control is-valid");
        }
    }

    function invalida_user(messaggio){
        $("#usernameM").val(("")).attr("placeholder",messaggio)
        $("#usernameM").attr("class", "campo-form form-control is-invalid");
        //username.setCustomValidity("gia in uso")
        $("#usernameM").focus();
    }

