var elDlugosc = document.getElementById("dlugosc");
var elCyfra = document.getElementById("cyfra");
var elDuzaLitera = document.getElementById("duzaLitera");
var elMalaLitera = document.getElementById("malaLitera");
var elZnakSpecialny = document.getElementById("znakSpecialny");

var elHaslo = document.getElementById("haslo");
var elSprawdz = document.getElementById("sprawdz");
var elKomunikat = document.getElementById("komunikat");


function sprawdzHaslo (){
    var pass = elHaslo.value;
    var regCyfra = /\d/;
    var cyfra = regCyfra.test(pass);
    var regLiteraM = /[a-z]/;
    var literaM = regLiteraM.test(pass);
    var regLitraD = /[A-Z]/;
    var literaD = regLitraD.test(pass);
    var regZnakSpeci = /\W|_/;
    var znakSpeci = regZnakSpeci.test(pass);
    var dlugosc = elHaslo.value.length;
    
    if (dlugosc >=8){
        elDlugosc.style.color = 'rgba(21, 224, 122, 0.30)';
        elDlugosc.innerHTML = '<del>dlugosc</del>';
    }else{
        elDlugosc.style.color = 'black';
        elDlugosc.innerHTML = 'dlugosc';
    }
        if (cyfra >=1){
        elCyfra.style.color = 'rgba(21, 224, 122, 0.30)';
        elCyfra.innerHTML = '<del>cyfra</del>';
    }else{
        elCyfra.style.color = 'black';
        elCyfra.innerHTML = 'cyfra';
    }
    
        if (literaD >=1){
        elDuzaLitera.style.color = 'rgba(21, 224, 122, 0.30)';
        elDuzaLitera.innerHTML = '<del>duza litera</del>';
    }else{
        elDuzaLitera.style.color = 'black';
        elDuzaLitera.innerHTML = 'duza litera';
    }
    
        if (literaM>=1){
        elMalaLitera.style.color = 'rgba(21, 224, 122, 0.30)';
        elMalaLitera.innerHTML = '<del>mala litera</del>';
    }else{
        elMalaLitera.style.color = 'black';
        elMalaLitera.innerHTML = 'mala litera';
    }
    
        if (znakSpeci >=1){
        elZnakSpecialny.style.color = 'rgba(21, 224, 122, 0.30)';
        elZnakSpecialny.innerHTML = '<del>Znak Specialny</del>';
    }else{
        elZnakSpecialny.style.color = 'black';
        elZnakSpecialny.innerHTML = 'Znak specialny';
    }
    
     if (cyfra && literaD && literaM && znakSpeci && dlugosc >= 8){
            elHaslo.innerHTML = 'haslo poprawne';
         }else{
             elHaslo.innerHTML = 'haslo bledne';
         }   
}


elHaslo.addEventListener('keyup',sprawdzHaslo);
