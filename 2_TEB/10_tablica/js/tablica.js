var tablica = []; //tablica pusta
var kolory =  ['zielony', 'czerwony','niebieski']; // tablica z trzyma elementami
var cyfry = [1 , 2 , 3 , 4 , 5 , 6];
var a = "Janusz";
var b = "Agata";
var c = "Jonasz";
var tab = [a, b, c, 'tekst'];
var tab1 = [a, 'tekst', 1, 'a',10];

//#########################################

var owoce = ['pomelo', 'kiwi', 'jablko', 'arbuz'];
console.log (owoce); //wyswietla tablice
//document.write(owoce); //pomelo,kiwi,jablko

var dlugosc = owoce.length;
console.log(dlugosc);

//########## wyswietlenie elementow tablicy ###########

var pilkarze = ['Carlos','Lewandowski','Messi','Dudek', 'Zidane'];

console.log(pilkarze[2]); //Messi
//pierwszy element
console.log(pilkarze[0]); //Carlos
//ostatni element
console.log(pilkarze[pilkarze.length - 1]); //Zidane
console.log(pilkarze[pilkarze.length ]); //undefined

/*for (var i = 0; i < pilkarze.length; i++){
    document.write(pilkarze[i]+" " );
}*/

for (var i = 0; i < pilkarze.length; i++){
    document.write("pilkarz" + " " + (i+1) + " - " + pilkarze[i] + "<br>");
}

document.write("<li id='kwadrat'>Pierwszy pilkarz w tablicy: " + pilkarze [0] + "</li>");
document.write("<li id='pilka'>Ostatni pilkarz w tablicy: " + pilkarze[pilkarze.length -1] + "</li>");

//############# dodawanie elementow ################

var tabCyfry = [1, 2, 3, 4];
tabCyfry.push(5);
console.log(tabCyfry);

//############# odejmowanie elementow ################

tabCyfry.pop(); //usuniecie 5
tabCyfry.pop(); //usuniecie 4
console.log(tabCyfry); // (3) [1 , 2 , 3]

//################## Sortowanie ############################

var imiona = ['Janusz', 'Agata', 'Zenon', 'Ula', 'Andrzej'];
console.log(imiona);
var sortImiona = imiona.sort();
console.log(sortImiona);
var reverseImiona = sortImiona.reverse();
console.log(sortImiona);
reverseImiona.push("Marta");
//dodanie do tablicy na koncu
console.log(reverseImiona);

//dodanie do tablicy na poczatku

reverseImiona.unshift("Monika");
console.log(reverseImiona);

//sprawdzenie czy element istnieje w tablicy

console.log(reverseImiona.indexOf('Monika')); //0
console.log(reverseImiona.indexOf('Marta')); //6
console.log(reverseImiona.indexOf('xyz')); //-1

var liczba = [2, 10, 1000, 23, 9];
console.log(liczba);
//sortowanie liczb

var sortLiczby = liczba.sort();
console.log(sortLiczby);

var prawidloweSortLiczby = liczba.sort(function(a,b){
    return a - b;
});
console.log(prawidloweSortLiczby);

//############### tablica wielowymiarowe ##########

var dane = [];
dane[0] = ['Jan', 'Nowak', 'Poznan', 'Polska' ];
dane[1] = ['Anna', 'Nowak', 'Gniezno' , 'Polska' , 11];
dane[2] = ['Pawel', 'Kowal', 'Poznan'];
console.log(dane[1][2]); //Gniezno
/*for (var i=0; i <= 2; i++){
    for(var j= 0; j <= 2; j++){
    document.write(dane[i][j]);
}   
    document.write("<br>");
}*/
//##########################################
/*for (i = 0; i <=dane.length; i++){
    for (j = 0; j < dane.length ; j++){
        document.write(dane[i][j] + " ");
    }
    document.write("<br>");
}
*/
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
var elDodajU = document.getElementById("DodajU");
var elWyswietlU = document.getElementById("WyswieltU");
var elDivU = document.getElementById("DivU");
var elPrzyciskWybor = document.getElementById("PrzyciskWybor");
var elDivWybor = document.getElementById("divWybor");
var k;

function dodajKolor (){
    if(elKolor.value.length != 0)
    tabKolory.push(elKolor.value);
    console.log(tabKolory);
    elKolor.value = "";
    elKolor.focus();
    //elWynik.innerHTML = tabKolory;
}

function wyswietlKolory (){
    kol = "";
    for(var i = 0; i < tabKolory.length; i++){
        kol+="<li>" +tabKolory[i] + "</li>";
 }
    elWynik.innerHTML = kol;
}

function wyswietlUzytkownika (){
    var nazwisko;
    for (var i=0; i <daneU.length; i++){
        nazwisko += daneU[i][1] + "<br>"
        eldivU.innerHTML = daneU[i][1] + "<br>"
    }
}

function dodajUzytkownika (){
    daneU[daneU.length] = [elImie.value, elNazwisko.value, elMiasto.value];
    console.log(daneU);
    console.log(daneU.length);
    elImie.value = "";
    elNazwisko.value = "";
    elMiasto.value = "";
    elImie.focus();
}

function wyswietlUzytkownika1 (){
    var nazwisko = "";
    for (var i=0; i <daneU.length; i++){
        nazwisko += daneU[i][1] + '<input type="radio" name="wybor" value="'+ i + '">' + '<br>';
    }
    elDivU.innerHTML = '<form name="form1">' + nazwisko + '</form>';
}
function wyborU(){
    var id, k;
    k = "Imie: " + daneU[id][0]+ "<br>";
    k += "Nazwisko: " + daneU[id][1]+ "<br>";
    k += "Miasto: " + daneU[id][2]+ "<br>";
    //console.log(id);
    elDivWybor.innerHTML = k;
    id = form1.elements["wybor"].value;
}

elPrzycisk.addEventListener('click', dodajKolor);
elWyswietl.addEventListener('click', wyswietlKolory);
elDodajU.addEventListener('click', dodajUzytkownika);
elWyswietlU.addEventListener('click', wyswietlUzytkownika1);
elPrzyciskWybor.addEventListener('click',wyborU);