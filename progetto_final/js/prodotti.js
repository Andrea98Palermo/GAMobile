/*AUTORE: ANDREA PALERMO*/

$(document).ready(function(){
    $(".prodotto").click(function(){
        var nome = $(this).find(".testo-primario-chiaro").text();
        window.location.href = 'vista-prodotto.php?prod=' + nome;
    });
});