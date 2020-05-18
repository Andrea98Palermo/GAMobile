var controllo=0;

function validaFormLogin(){
        //controlla_pass()
        setuppp();
        if(controllo==1){
            window.alert("accesso eseguito");
            controllo=0;
            return true;
        }
        //window.alert("accesso non");
        return false;
}

$(document.loginForm).ready(setupp);

    function setupp(){
        //window.alert("aaa")
        //$("#username").on("blur",controllaUsername);
        $("#username1").on("blur",controlla_User);
        $("#username1").focus();
        //$("#password1").on("blur",controlla_pass);
        //$("#password1").focus();
        //return true;
    }

    function setuppp(){
        //window.alert("aaa")
        //$("#username").on("blur",controllaUsername);
        $("#password1").on("blur",controlla_pass);
        $("#password1").focus();
        //return true;
    }


    function controlla_User(){
        let username_in=$("#username1").val();
        $.get("./php/register.php",{user:username_in},rispo);
    }

    function rispo(risposta){
        if(risposta=="Nusato"){
            $("#username1").val(("")).attr("placeholder","non esistente")
            $("#username1").attr("class", "campo-form form-control is-invalid");
            //username.setCustomValidity("gia in uso")
            $("#username1").focus();
        }
        if($("#username1").val().length !==0){
            $("#username1").attr("class", "campo-form form-control is-valid");
        }
    }



    function controlla_pass(){
        let username_ins=$("#username1").val();
        let password_ins=$("#password1").val();
        //window.alert(password_ins)
        $.get("./php/login.php",{userr:username_ins,passw:password_ins},rispostaServer);
        //return true
    }



    function rispostaServer(risposta){
        if(risposta!=="Nesatte"){
            //window.alert("cos");
            invalida_usern("Credenziali errate");
        }else{
        controllo=1;
        }
        //window.alert("cos");
        //if($("#password1").val().length !==0){
           // $("#password1").attr("class", "campo-form form-control is-valid");
        //}
    }

    function invalida_usern(messaggio){
        $("#password1").val(("")).attr("placeholder",messaggio)
        $("#password1").attr("class", "campo-form form-control is-invalid");
        //username.setCustomValidity("gia in uso")
        $("#password1").focus();
    }