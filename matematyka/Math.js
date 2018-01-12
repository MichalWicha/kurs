var r = 5;
var pi = Math.pi; // Math - obiekt .- operator elementu skladowego pi-wlasciwosc
var polekola = pi * r ;
document.write(polekola);

var x = prompt("podaj wartosc");
console.log(Math.sqrt(x));

var a = 13.2;
var b = 28.5;
var c = 1;
var d = 2;
var e = 1;

var minimalna = Math.min (a , b , c);
console.log("Min: " + minimalna);

var maksymalna = Math.max (a , b ,c );
console.log("Max: " + maksymalna);

var zaokraglenie = Math.count(b);
console.log(zaokraglenie);

var d = d.toFixed(d);

//liczba calkowita
var e = e.toPrecision(e);


//abs, round, floor,

var x = -56;
var y = -11.1;
var z = 14.9;

document.write("<br>ABS</br>");
document.write("<br>" + Math.abs(x) + "<br>");
document.write("<br>" + Math.abs(y) + "<br>");
document.write("<br>" + Math.abs(z) + "<br>");

document.write("<br>ABS</br>");
document.write("<br>" + Math.round(x) + "<br>");
document.write("<br>" + Math.round(y) + "<br>");
document.write("<br>" + Math.round(z) + "<br>");

document.write("<br>ABS</br>");
document.write("<br>" + Math.floor(x) + "<br>");
document.write("<br>" + Math.floor(y) + "<br>");
document.write("<br>" + Math.floor(z) + "<br>");

document.write ("<br>" + Math.abs(Math.round(z)) + "<br>"); // 56

var p = Math.pow (2.10);
console.log (p)


//Losowanie


//losuj z przedzialu <0-10>
var losuj = Math.floor(Math.random()* 10);
console.log (losuj);

//losuj z przedzialu <0-100> 
var losujPrzedzial = Math.floor(Math.random() * 11+ 10;
console.log(losuj);

