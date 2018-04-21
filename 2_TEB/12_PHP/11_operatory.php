<?php
    //operatory arytmetyczne
/*
    $x = 2;
    $y = 3;
    $mnoezenie = $x * $y;
    $potegowanie = $x ** $y; //8
    $potegowanie = 2 ** 10; //1024
    $dzielenie = $x / $y; //0.66666666667
    $dzielenie = round($dzielenie,2); //0.67
    $dodawanie = $x + $y; //5
    $odejmowanie = $x - $y; //-1
    $modulo = $x % $y; //2
*/
//inkrementacja dekremantacja
/*
    $x = 2;
    echo $x++; //2
    echo ++$x; //4
    echo $x; //4
    $y = $x++;
    echo $y; //4
    $y = ++$x;
    echo $y; //6
    echo ++$y; //7

*/
//operatory logiczne

//and or xor ! && ||

//zad 1 
//sprawdz czy w sklepie kupisz rower


$sklep = 'otwarty';
$pieniadze = 1800;
$rower = true;

    if($sklep == 'otwarty' && $pieniadze > 1000 && $rower)
    {
        echo 'kupiles rower<br>';
    }else{
        echo 'nie kupiles roweru idz pieszo';
    }

//zad 2 
//uzytkowanik chce kupic rower lub hulajnoge

$sklep = true;
$pieniadze = 2500;
$rower = true;
$hulajnoga = true;

if($sklep && $pieniadze > 2000 && $rower)
{
    echo 'JESTES BOGATY !';
}else{
    echo 'nie stac cie na rower biedaku :(';
    echo '<br>kup sobie hulajnoge!';
}if
($sklep =='true' && $pieniadze > 200 && $hulajnoga){
    echo '<br>kupiles sobie hulajnoge boagczu !';
}else{
    echo 'jestes totalnym biedakiem, nie stac cie na hulajnoge! :(';
}

    echo '<br><br>';
//operatory relacyjne

// ==, ===, <>, !=, !==, >, <, >=, <= , <=>

    $a = 1;
    $b = 2;
    $c = '1';
    $d = 1;
    $wynik = $a == $c; //1
    $wynik = $a === $c; //false
    $wynik = $a === $d; //1
    $wynik = $a <> $c; //false
    $wynik = $a <> $b; //1
    $wynik = $a != $b; //1
    $wynik = $a !== $d; //false
    $wynik = $a !== $c; //1
    $wynik = $a > $b; //false
    $wynik = $a >= $b; //false
    $wynik = $a < $b; //1
    $wynik = $a <= $b; //1
    $wynik = $a <=> $b; //1

//od PHP 7
// <=> operator spaceship
//-1 pierwsza wartosc jest mniejsza od drugiej
//0 wartosci sa rowne
//1 pierwsza wartosc jest wieksza od drugiej

$a = 2;
$b = 10;
$wynik = $a <=> $b;

//echo gettype($c);

//echo $wynik'<br>';
######################################################################################

$x = null;
$y = 'test';
$z = 5;

$wynik = $x ?? $y ?? $z;
echo $wynik;

//operartor lancuchowy

$tekst1 = 'Jan';
$tekst2 = 'Kowal';
echo $tekst1.'<br>'.$tekst2.'<br>';
echo $tekst1,'jan';
//operatory przypisania
// =, +=, -=, *=, /=, %=, .=
//istnieja rowniez operatory bitowe

$a = 5;
echo gettype($a);//integar
$a = '';
echo gettype($a);//string
$b = 10;
echo gettype($b); // integer
$a += $b; //15 // $a = $a + $b
$b .= $a; // $b 10 + 15 = 1015

echo $b;
echo gettype($b); // string
echo '<br><br>';

#######################################################
//operator warunkowy

    $x = 5;
    $wynik = ($x > 2)?' x wieksze od 2':'x nie jest wieksze od 2';

    if($x > 2)
        echo 'x wieksze od 2';
else
    echo 'x nie jest wieksze od 2';

echo 'x nie jest wieksze od 2';
echo $wynik.'<br><br>';

######################################################

//operatory rzutowania(konwersji typow)
//int integer, float double real, bool boolean, string, array
//object, unset

    $x = '2';
    echo gettype($x); //string
    $x = (int)$x;
    echo gettype($x); //intege
    $x = (double)$x;
    echo gettype($x); //doblue
    $x = (unset)$x;
    echo gettype($x);//NULL

    echo '<br><br>';
//Priorytet operatorow

//&& ma wiekszy priorytet niz AND
//|| ma wiekszy priorytet niz OR

##################################################################

//konwersja typow

    $napis = 'Janusz';
    echo gettype($napis);

    $napis = '10';
    echo gettype($napis);

//funkcje konwersji
// intwal(), floatval(), doubleval(), stringval(), boolval()

    $liczba = 2.5;
    //$liczba = (int)$liczba;
    $liczba = intval($liczba);
    echo gettype($liczba).' '.$liczba;

//settype()

    $liczba1 = 10.5;
    settype($liczba1,"int");
    echo $liczba.gettype($liczba);

    $liczba2 = 5;
    settype($liczba2,'double');
    echo gettype($liczba2);

    $liczba3 = 0;
    settype($liczba3,'bool');
    echo $liczba3; //false
?>