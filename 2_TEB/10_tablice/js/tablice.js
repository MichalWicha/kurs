var tablica  = [];  //tablica pusta
var kolory = ['zielony', 'czerwony', 'niebieski']; //tablica z trzema elementami
var cyfry1 = [1, 2, 3, 4, 5, 6];
var a = 'Janusz';
var b = 'Agata';
var c = 'Jonasz';
var tab = [a, b, c, 'tekst'];
var tab1 = [a, 'tekst', 1, 'a', 10];

//#######################################################

var owoce = ['pomelo', 'kiwi', 'jabłko', 'arbuz'];
console.log(owoce); //wyświetla tablice
//document.write(owoce); //pomelo,kiwi,jabłko
var dlugosc = owoce.length;
console.log(dlugosc);

//##########  wyświetlenie elementów tablicy  ######################

var pilkarze = ['Carlos', 'Lewandowski', 'Messi', 'Dudek', 'Zidane'];

console.log(pilkarze[2]);   //Messi

//pierwszy element tablicy
console.log(pilkarze[0]);   //Carlos

//ostatni element tablicy
console.log(pilkarze[pilkarze.length]);   //undefined
console.log(pilkarze[pilkarze.length - 1]);   //Zidane

//Carlos Lewandowski Messi Dudek Zidane
/*for (var i = 0; i < pilkarze.length; i++){
    document.write(pilkarze[i] + " ");
}*/

for (var i = 0; i < pilkarze.length; i++){
    document.write("piłkarz" + " " + (i+1) + " - " + pilkarze[i] + "<br>");
}

document.write("<li id='kwadrat'>Pierwszy piłkarz w tablicy: " + pilkarze[0] + "</li>");
document.write("<li id='pilka'>Ostatni piłkarz w tablicy: " + pilkarze[pilkarze.length -1 ] + "</li>");

//###############  dodawanie elementów  #########################

var tabCyfry = [1, 2, 3, 4];
tabCyfry.push(5);
console.log(tabCyfry);

//###############  odejmowanie elementów  #########################

tabCyfry.pop(); //usunięcie 5
tabCyfry.pop(); //usunięcie 4
console.log(tabCyfry); //(3) [1, 2, 3]

//##################  sortowanie  #############################

var imiona = ['Janusz', 'Agata', 'Zenon', 'Ula', 'Andrzej'];
console.log(imiona);
var sortImiona = imiona.sort();
console.log(sortImiona);
var reverseImiona = sortImiona.reverse();
console.log(reverseImiona);

//dodanie do tablicy na końcu
reverseImiona.push("Marta");
console.log(reverseImiona);

//dodanie do tablicy na początku
reverseImiona.unshift("Monika");
console.log(reverseImiona);

//sprawdzenie czy element istnieje w tablicy
console.log(reverseImiona.indexOf('Monika')); //0
console.log(reverseImiona.indexOf('Marta')); //6
console.log(reverseImiona.indexOf('xyz')); //-1

var liczba = [2, 10, 1000, 23, 9];
console.log(liczba);

//################  sortowanie liczb  ###################

var sortLiczby = liczba.sort();
console.log(sortLiczby);

var prawidloweSortLiczby = liczba.sort(function(a,b){
    return a - b;
});
console.log(prawidloweSortLiczby);

//#################  tablice wielowymiarowe  #############

document.write("<hr>");
var dane = [];
dane[0] = ['Jan', 'Nowak', 'Poznań', 'Polska'];
dane[1] = ['Anna', 'Nowak', 'Gniezno', 'Polska',11];
dane[2] = ['Paweł', 'Kowal', 'Poznań'];
console.log(dane[1][2]); //Gniezno

var j, k;
/*for (j = 0; j <= 2; j++){
    for (k = 0; k <= 2; k++){
        document.write(dane[j][k] + " ");
    }
    document.write("<br>");
}*/
/*for (j = 0; j <= dane.length; j++){
    //for (k = 0; k < dane[j].length ; k++){
    for (k = 0; k < dane[j].length ; k++){
        document.write(dane[j][k] + " ");
    }
    document.write("<br>");
}*/
console.clear();

var elKolor = document.getElementById('kolor');
elKolor.focus();
var elPrzycisk = document.getElementById('przycisk');
var elWyswietl = document.getElementById('wyswietl');
var elWynik = document.getElementById('wynik');
var tabKolory = [];
var daneU = [];

var elImie = document.getElementById("imie");
var elNazwisko = document.getElementById("nazwisko");
var elMiasto = document.getElementById("miasto");
var elDodajU = document.getElementById("dodajU");
var elWyswietlU = document.getElementById("wyswietlU");
var elDivU = document.getElementById("divU");
var elPrzyciskWybor = document.getElementById("przyciskWybor");
var elDivWybor = document.getElementById("divWybor");

function dodajKolor() {
    if(elKolor.value.length != 0){
        tabKolory.push(elKolor.value);
    }
    console.log(tabKolory);
    elKolor.value = "";
    elKolor.focus();
    //elWynik.innerHTML = tabKolory;
}

function wyswietlKolory() {
    var k = "";
    for (var i = 0; i < tabKolory.length; i++){

        k+="<li>" + tabKolory[i] + " ";
        elWynik.innerHTML = k;
    }
}

function dodajUzytkownika() {
   daneU[daneU.length] = [elImie.value, elNazwisko.value, elMiasto.value];
   console.log(daneU);
   console.log(daneU.length);
   elImie.value = "";
   elNazwisko.value = "";
   elMiasto.value = "";
    elImie.focus();
}

function wyswietlUzytkownika() {
   var nazwisko = "";
   for(var i = 0; i < daneU.length; i++){
       nazwisko += daneU[i][1] + "<br>";
   }
    elDivU.innerHTML = nazwisko;
}

function wyswietlUzytkownika1() {

    var nazwisko = "";
    for(var i = 0; i < daneU.length; i++){
       nazwisko += daneU[i][1] + '<input type="radio" name="wybor" value="'+ i + '">' + '<br>';
   }

    elDivU.innerHTML = '<form name="form1">' + nazwisko + '</form>';
    //elDivU.innerHTML =  nazwisko ;
}

function wyborU() {
    var id, komunikat;
    id = form1.elements["wybor"].value;
    //console.log(id);
    //divWybor.innerHTML = daneU[id];
    komunikat = "Imię: " + daneU[id][0] + "<br>";
    komunikat += "Nazwisko: " + daneU[id][1] + "<br>";
    komunikat += "Miasto: " + daneU[id][2] + "<br>";
    divWybor.innerHTML = komunikat
}

elPrzycisk.addEventListener('click',dodajKolor);
elWyswietl.addEventListener('click',wyswietlKolory);
elDodajU.addEventListener('click',dodajUzytkownika);
elWyswietlU.addEventListener('click',wyswietlUzytkownika1);
elPrzyciskWybor.addEventListener('click',wyborU);
