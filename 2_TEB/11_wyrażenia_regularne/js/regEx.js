//true or false  prawda lub fałsz

var tekst = '12-333';
var regula = /szkola/;
regula = /SZKOLA/;
regula = /SzKoLa/i;
regula = /^szkola/i;
regula = /szkola$/i;
regula = /^Janusz$/;

regula = /[a]/;
regula = /[A]/i;
regula = /[0-9]/;
regula = /[a-z]/;
regula = /[A-Z]/;
regula = /[A-z]/; //uwaga na inne znaki np. []\^_`
regula = /[a-z]|[A-Z]/;
regula = /[ąężźśćńół]|[a-z]/;
regula = /^[ąężźśćńół]|[A-Z]/;
regula = /^[ąężźśćńół]/;
//    \s - spacja, tabulacja lub znak nowego wiersza
//    \S - nak niebędący spacją, tabulacją lub znakiem nowego wiersza
regula = /[a-z]\s/;
regula = /[a-z]\S/;
regula = /[a-z]\S/;

//mail
// + jeden lub więcej znaków
regula = /[a-z]+@/;
//? jeden lub brak  znaku
regula = /^mąk[a]?@/;
regula = /^mąk[ą]?@/;
regula = /[a]{1}/;
regula = /[a]{2}/;
regula = /[a]{2,4}/;
regula = /[a]{2,}/;
regula = /^[a]{2,}/;
regula = /^[a]{2,}$/;
regula = /\//;
regula = /\s/;  //wymaga spacji
regula = /\S/;  //brak spacji
regula = /../;  //dwa znaki
regula = /\./;  //znak kropki
regula = /\$/;  //znak dolara
regula = /\.[a-z]{2}$/;  //.pl   .nl   .de

//  \w  znak będący literą, cyfrą, znakiem podkreślenia
//  \W  znak nie będący literą, cyfrą, znakiem podkreślenia

regula = /\w/;
regula = /\W|[_]/;

//  \d  znak będący cyfrą
//  \D  znak niebędący cyfrą

regula = /\d/;
regula = /\D/;

//grupa

regula = /(test)/;
regula = /(test){2}/;

//kod pocztowy

//kodPocztowy = /^[0-9]{2}-[0-9]{3}$/;
kodPocztowy = /^\d{2}-\d{3}$/;
var sprawdz = regula.test(tekst);
sprawdz = kodPocztowy.test(tekst);
//console.log(sprawdz);

var muzyka = "plik@mp3 arkusz.csv szkola.mp3 tekst.mp3";
//var mp3 = /\w+\.mp3/;
var mp3 = /\w+\.mp3/g;
sprawdz = mp3.test(muzyka);
var sprawdz1;
sprawdz1 = muzyka.match(mp3);
console.log(sprawdz);
console.log(sprawdz1);

var iloscUtworow = sprawdz1.length;
console.log("Ilość utworów: " + iloscUtworow);

document.write("<ol>");
for (var i = 0; i < iloscUtworow; i++){
    document.write('<li>' + sprawdz1[i] + '</li>');
}
document.write("</ol>");
