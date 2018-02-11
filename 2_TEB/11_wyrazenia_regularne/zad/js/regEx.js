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
     if (cyfra && literaD && literaM && znakSpeci && dlugosc >= 8){
            elKomunikat.innerHTML = 'haslo poprawne';
         }else{
             elKomunikat.innerHTML = 'haslo bledne';
         }   
}


elSprawdz.addEventListener('click',sprawdzHaslo);