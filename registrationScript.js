function validaForm(){
    window.alert("registrazione andata a buon fine!");

}

function controllaUsername(){
    if (document.registrationForm.username.value.length>20 || document.registrationForm.username.value.length<3) {
        //alert("usernme deve essere compreso tra i 3 e i 20 caratteri alfanumerici");
        username.setCustomValidity("Compreso tra i 3 e i 20 caratteri alfanumerici");
        return false;
    }
    //window.alert(document.registrationForm.username.value.length);
    username.setCustomValidity('')
    return true;

}

function controllaPassword(){
    if (document.registrationForm.password.value.length>20 || document.registrationForm.password.value.length<8) {
        //alert("usernme deve essere compreso tra i 3 e i 20 caratteri alfanumerici");
        password.setCustomValidity("Compreso tra i 8 e i 20 caratteri alfanumerici");
        return false;
    }
    password.setCustomValidity('')
    return true;

}

function confirmPassword(){
    if (document.registrationForm.password.value != document.registrationForm.password2.value) {
        //alert("usernme deve essere compreso tra i 3 e i 20 caratteri alfanumerici");
        password2.setCustomValidity("Passwords don't match");
        return false;
    }
    password2.setCustomValidity('')
    return true;

}
/*----------------------------------------------------------*/
/*function validaForm(){
    window.alert("registrazione andata a buon fine!");

}

function lunghezzaUsername(){
    if (document.loginForm.username.value.length>20 || document.loginForm.username.value.length<3) {
        //alert("usernme deve essere compreso tra i 3 e i 20 caratteri alfanumerici");
        username.setCustomValidity("Compreso tra i 3 e i 20 caratteri alfanumerici");
        return false;
    }
    //window.alert(document.registrationForm.username.value.length);
    username.setCustomValidity('')
    return true;

}*/
