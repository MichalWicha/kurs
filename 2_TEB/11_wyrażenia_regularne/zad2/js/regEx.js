/*
    zad.2
    Sprawdź czy hasło spełnia wymagania:
        - 8 znaków
        - duża litera
        - mała litera
        - znak specjalny
        sprawdzane po każdym wpisanym znaku (bez przycisku)
*/

elHaslo = document.getElementById('haslo');
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

elHaslo.addEventListener('keyup',sprawdz);
