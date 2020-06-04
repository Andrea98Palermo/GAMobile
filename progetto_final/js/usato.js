/*AUTORE: ANDREA PALERMO*/

$(document).ready( function() {

    //RICERCA PRODOTTI PER NOME
    var input = document.getElementById('ricerca');
    input.onkeyup = function () {
        var filter = input.value.toUpperCase();
        var lis = document.getElementById('lista').getElementsByTagName('li');
        var names = document.querySelectorAll('ul li .row .nome-prod');
        for (var i = 0; i < lis.length; i++) {
            var name = names[i].innerHTML; 
            if (name.toUpperCase().indexOf(filter) == 0) 
                lis[i].style.display = 'list-item';
            else
                lis[i].style.display = 'none';
        }
    }

    //AGGIUNTA FILTRO SU CONDIZIONE
    $(".filtro-cond").click(function(){
        
        var others = $(".filtro-cond")
        for (var i = 0; i < others.length; i++) {
            others[i].classList.remove("active");
        }
        this.classList.add("active");
        var filter = $(this).text().toUpperCase();
        var lis = document.getElementById('lista').getElementsByTagName('li');
        var names = document.querySelectorAll('ul li .row .condizione-prod');
        var filtroPrezzo = $(".filtro-prezzo.active");
        if(filtroPrezzo.length){
            var filter2 = parseInt(filtroPrezzo.text().substring(0,3));
            var names2 = document.querySelectorAll('ul li .row .prezzo-prod');
            for (var i = 0; i < lis.length; i++) {
                if(lis[i].style.display = 'list-item'){
                    var name = names[i].innerHTML;
                    var name2= parseInt(names2[i].innerHTML.substring(0,3));
                    if (name.toUpperCase().indexOf(filter) == 0 && name2 <= filter2) 
                        lis[i].style.display = 'list-item';
                    else
                        lis[i].style.display = 'none';
                }
            }
        }
        else{
            for (var i = 0; i < lis.length; i++) {
                if(lis[i].style.display = 'list-item'){
                    var name = names[i].innerHTML;
                    if (name.toUpperCase().indexOf(filter) == 0) 
                        lis[i].style.display = 'list-item';
                    else
                        lis[i].style.display = 'none';
                }
            }
        }
    
    });

    //AGGIUNTA FILTRO SU PREZZO
    $(".filtro-prezzo").click(function(){
        
        var others = $(".filtro-prezzo")
        for (var i = 0; i < others.length; i++) {
            others[i].classList.remove("active");
        }
        this.classList.add("active");
        var filter = parseInt($(this).text().substring(0,3));
        var lis = document.getElementById('lista').getElementsByTagName('li');
        var names = document.querySelectorAll('ul li .row .prezzo-prod');
        var filtroCond = $(".filtro-cond.active");
        if(filtroCond.length){ 
            var filter2 = filtroCond.text().toUpperCase();
            var names2 = document.querySelectorAll('ul li .row .condizione-prod');
            for (var i = 0; i < lis.length; i++) {
                if(lis[i].style.display = 'list-item'){
                    var name = parseInt(names[i].innerHTML.substring(0,3));
                    var name2 = names2[i].innerHTML;
                    if (name <= filter && name2.toUpperCase().indexOf(filter2) == 0) 
                        lis[i].style.display = 'list-item';
                    else
                        lis[i].style.display = 'none';
                }
            }
        }
        else{
            for (var i = 0; i < lis.length; i++) {
                if(lis[i].style.display = 'list-item'){
                    var name = parseInt(names[i].innerHTML.substring(0,3));
                    if (name <= filter) 
                        lis[i].style.display = 'list-item';
                    else
                        lis[i].style.display = 'none';
                }
            }
        }
    
    });

    //RIMOZIONE FILTRI ATTIVI
    $("#rimuovi-filtri").click(function(){
        var lis = document.getElementById('lista').getElementsByTagName('li');
        for (var i = 0; i < lis.length; i++) {
            lis[i].style.display = 'list-item';
            var f1 = $(".filtro-prezzo");
            for (var j = 0; j < f1.length; j++) {
                f1[j].classList.remove("active");
            }
            var f2 = $(".filtro-cond");
            for (var k = 0; k < f2.length; k++) {
                f2[k].classList.remove("active");
            }
        }
    }); 


    //LINK A PAGINA VISUALIZZAZIONE PRODOTTO
    $(".prodotto").click(function(){
        var nome = $(this).find(".nome-prod").text();
        var condizione = $(this).find(".condizione-prod").text();
        var prezzo = $(this).find(".prezzo-prod").text();
        window.location.href = 'vista-usato.php?prod=' + nome + '&cond=' + condizione + '&price=' + prezzo;
    });

});

