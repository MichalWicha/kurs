/*
    zad.1
    Sprawdź czy hasło spełnia wymagania:
        - 8 znaków
        - duża litera
        - mała litera
        - znak specjalny
*/

elHaslo = document.getElementById('haslo');
elPrzycisk = document.getElementById('przycisk');
elKomunikat = document.getElementById('komunikat');

function sprawdz() {
    var pass = elHaslo.value;

    var dlugosc = pass.length;
    var regCyfra = /\d/;
    var cyfra = regCyfra.test(pass);
    var regDuzaLitera = /[A-Z]/;
    var duzaLitera = regDuzaLitera.test(pass);
    var regMalaLitera = /[a-z]/;
    var malaLitera = regMalaLitera.test(pass);
    var regZnakSpecjalny = /\W|_/;
    var znakSpecjalny = regZnakSpecjalny.test(pass);

    if(dlugosc >=8 && cyfra && duzaLitera && malaLitera && znakSpecjalny){
        elKomunikat.innerHTML = "Poprawne hasło";
    }else{
        elKomunikat.innerHTML = "Hasło niepoprawne";
    }


}

elPrzycisk.addEventListener('click',sprawdz);
