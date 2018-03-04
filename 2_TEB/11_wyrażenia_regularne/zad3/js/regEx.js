/*
    zad.3
    Sprawdź czy hasło spełnia wymagania:
        - 8 znaków
        - duża litera
        - mała litera
        - znak specjalny
        sprawdzane po każdym wpisanym znaku (bez przycisku)
        lista (wykreślane spełnione wymagania)
*/

elHaslo = document.getElementById('haslo');
elKomunikat = document.getElementById('komunikat');
elDlugosc = document.getElementById('dlugosc');
elCyfra = document.getElementById('cyfra');
elDuzaLitera = document.getElementById('duzaLitera');
elMalaLitera = document.getElementById('malaLitera');
elZnak = document.getElementById('znak');

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

    if(dlugosc >= 8){
        elDlugosc.style.color = 'rgba(21, 224, 122, 0.36)';
        elDlugosc.innerHTML = '<del>Długość</del>';
    }else{
        elDlugosc.style.color = 'black';
        elDlugosc.innerHTML = 'Długość';
    }

    if(cyfra){
        elCyfra.style.color = 'rgba(21, 224, 122, 0.36)';
        elCyfra.innerHTML = '<del>Cyfra</del>';
    }else{
        elCyfra.style.color = 'black';
        elCyfra.innerHTML = 'Cyfra';
    }

    if(duzaLitera){
        elDuzaLitera.style.color = 'rgba(21, 224, 122, 0.36)';
        elDuzaLitera.innerHTML = '<del>Duża litera</del>';
    }else{
        elDuzaLitera.style.color = 'black';
        elDuzaLitera.innerHTML = 'Duża litera';
    }

    if(malaLitera){
        elMalaLitera.style.color = 'rgba(21, 224, 122, 0.36)';
        elMalaLitera.innerHTML = '<del>Mała litera</del>';
    }else{
        elMalaLitera.style.color = 'black';
        elMalaLitera.innerHTML = 'Mała litera';
    }

    if(znakSpecjalny){
        elZnak.style.color = 'rgba(21, 224, 122, 0.36)';
        elZnak.innerHTML = '<del>Znak specjalny</del>';
    }else{
        elZnak.style.color = 'black';
        elZnak.innerHTML = 'Znak specjalny';
    }

    if(dlugosc >=8 && cyfra && duzaLitera && malaLitera && znakSpecjalny){
        elKomunikat.style.color = '#5050e2';
        elKomunikat.innerHTML = '<h5>Poprawne hasło</h5>';
    }else{
        if(dlugosc >= 1){
            elKomunikat.style.color = 'red';
            elKomunikat.innerHTML = '<h6>Hasło niepoprawne</h6>';
        }else{
            elKomunikat.innerHTML = '';
        }
    }
}

elHaslo.addEventListener('keyup',sprawdz);
