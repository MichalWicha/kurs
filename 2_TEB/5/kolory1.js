var elPrzycisk = document.getElementById('przycisk');
var elCzerwony = document.getElementById('czerwony');
var elZielony = document.getElementById('zielony');
var elOrange = document.getElementById('orange');
var elInny = document.getElementById('inny');
var elWynik = document.getElementById('wynik');
var elWynikKolor = document.getElementById('wynikKolor');
var elWybierzKolor = document.getElementById('wybierzKolor');
elWybierzKolor.style.visibility = 'hidden';
var innyKolor;

elPrzycisk.onclick = function(){
    //alert('test');
    if(elCzerwony.checked){
        elWynik.innerHTML = 'Twój ulubiony kolor: ';
        elWynikKolor.innerHTML = ' czerwony';
        elWynikKolor.style.color = 'red';
    }else if(elZielony.checked){
        elWynik.innerHTML = 'Twój ulubiony kolor: ';
        elWynikKolor.innerHTML = ' zielony';
        elWynikKolor.style.color = 'green';
    }else if(elOrange.checked){
        elWynik.innerHTML = 'Twój ulubiony kolor: ';
        elWynikKolor.innerHTML = ' orange';
        elWynikKolor.style.color = 'orange';

    }else{
        //console.log(elWybierzKolor.value);
        innyKolor = elWybierzKolor.value;
        elWynik.innerHTML= 'Twój ulubiony kolor: ' ;
        elWynikKolor.innerHTML = innyKolor;
        elWynikKolor.style.color = innyKolor;
    }
}

elInny.onclick = function(){
    elWynik.innerHTML = 'Wybierz kolor';
    elWybierzKolor.style.visibility = 'visible';
}

