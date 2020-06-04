/*AUTORE: ANDREA PALERMO*/

//GESTIONE TRASPARENZA NAVBAR
$(document).scroll( function(evt) {
    var scrollval = window.pageYOffset;
    if(scrollval <= 0){document.getElementById("bar").style.opacity = 1.0;}
    else{document.getElementById("bar").style.opacity = 0.7;}
});


//GESTIONE TRASPARENZA FINESTRA MODAL(LOGIN E PROFILO)
$(document).ready(function(){
    $("#log_a").click(function(){
    var o = document.getElementById("bar").style.opacity;
    if(o == 0.7){document.getElementById("bar").style.opacity = 1;}
    });
});

//GESTIONE POSIZIONE TASTO LOGIN CON RIDIMENSIONAMENTO BARRA
$(window).resize(function(){
if($(window).width() < 768){
    $(".tasto-login").css("position", "relative")
    $(".tasto-login").css("padding", "2%")
}
else{
    $(".tasto-login").css("position", "absolute")
    $(".tasto-login").css("padding", "0.5%")
}
});