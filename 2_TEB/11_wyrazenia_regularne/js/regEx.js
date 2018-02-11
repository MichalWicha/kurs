//true or flase = prawda albo falsz
var tekst = '12-333';
var regula = /szkola/;
regula = /SZKOLA/;
regula = /SzKoLa/i;
regula = /^szkola/i;
regula = /szkola$/i;
regula = /^Janusz$/;

regula = /[a]/;
regula = /[A]i/;
regula = /[A-Z]/;
regula = /[A-z]/; //uwaga na inne znaki np. [] \ ^ _ ` 
regula = /[a-z]|[A-Z]/;
regula = /[ąężźćńółś]|[a-z]/;
regula = /^[ąężźćńółś]|[A-Z]/;
regula = /^[ąężźćńółś]/;
regula = /[a-z]\s/;
// \s = spacja, tabulacja lub znak nowego wiersza
// \S = znak niebedacy spacja, tabulacja lub znakiem nowego wiersza
regula = /[a-z]\s/;
regula = /[a-z]\S/;
regula = /[a-z]\S/;

//mail

regula = /[a-z]+@/;
// + oznacza jeden lub wiecej znakow

regula = /^mąk[a]?@/; 
regula = /^mąk[ą]?@/; 
regula = /[a]{1}/; 
regula = /[a]{2}/; 
regula = /[a]{2,4}/; 
// , oznacza dwa lub wiecej
regula = /[a]{2,}/; 
regula = /^[a]{2,}/; 
regula = /^[a]{2,}$/; 
regula = /\//; 
regula = /\s/; //wymaga spacji
regula = /\S/; // brak spacji
regula = /../; //dwa  znaki
regula = /\./; //znak kropki
regula = /\$/; //znak dolara
regula = /\.[a-z]{2}/; //.pl .de .nl

// \w znak bedacy litera, cyfra, znakiem podkreslenia
// \W znak nie bedacy litera, cyfra, znakiem podkreslenia

regula = /\w/;
regula = /\W|[_]?/;

// \d znak bedacy cyfra
// \D znak nie bedacy cyfra

regula = /\D/;
regula = /\d/;

//grupa

regula = /(test)/;
regula = /(test){2}/;

// kod pocztowy

//regula = /*[0-9]{2}-[0-9]{3}$/; - kod pocztowy
regula = /^\d{2}-\d{3}$/;

// moze byc znak "a" ale nie musi
// ? oznacza jeden lub brak znaku
var sprawdz = regula.test(tekst);
console.log(sprawdz);

var muzyka = "plik@mp3 arkusz.cvs szkola.mp3 tekst.mp3 ";
//var mp3 = /\w+\.mp3/;
var mp3 = /\w+\.mp3/g;
sprawdz = mp3.test(muzyka);
console.log(sprawdz);
var sprawdz1;
sprawdz1 = muzyka.match(mp3);
console.log(sprawdz);
console.log(sprawdz1);

var iloscUtworow = sprawdz1.length;
console.log("Ilosc utworow: " + iloscUtworow);

document.write("<ol>");
for (var i = 0; i < iloscUtworow; i++){
document.write('<li>' + sprawdz1[i] + '</li>');
}
document.write("</ol>");