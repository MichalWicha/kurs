<?php
    //operatory arytmetyczne

    $x = 2;
    $y = 3;

    $mnozenie = $x * $y;
    $potegowanie = $x ** $y; //8
    $potegowanie = 2 ** 10; //1024
    $dzielenie = $x / $y; //0.66666666666667
    $dzielenie = round($dzielenie,2); //0.67
    $dodawanie = $x + $y; //5
    $odejmowanie = $x - $y; //-1
    $modulo = $x % $y;

    //echo $modulo;

//inkrementacja dekrementacja

    $x = 2;
    echo $x++; //2
    echo ++$x; //4
    echo $x; //4
    $y = $x++;
    echo $y; //4
    $y = ++$x;
    echo $y; //6
    echo ++$y; //7

    echo '<br><br>';

//operatory logiczne
//and or xor ! && ||

//zad. 1
//sprawdz czy w sklepie kupisz rower

$sklep = 'zamknięty';
$pieniadze = 1800;
$rower = true;

    if($sklep == 'otwarty' && $pieniadze > 1000 && $rower){
        echo 'Kupiłeś rower';
    }else{
        echo 'Idź pieszo';
    }

    echo '<br>';

//zad. 2
//Użytkownić chce kupić rower lub hulajnogę

$sklep = true;
$pieniadze = 1401;
$rower = true;
$hulajnoga = true;

    if($sklep && $pieniadze > 1400 && ($rower && $hulajnoga)){
        echo 'Kupiłeś rower i hulajnogę';
    }else if($rower && $sklep && $pieniadze > 900)
        echo 'Kupiłeś rower';
    else if($hulajnoga && $sklep && $pieniadze > 500)
        echo 'Kupiłeś hulajnogę';
    else{
        echo 'Idź pieszo';
    }

    echo '<br><br>';

//operatory relacyjne
// ==, ===, <>, !=, !==, >, <, >=, <=, <=>

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

//  od php 7
//  <=>  spaceship operator
//-1  pierwsza wartość jest  mniejsza od drugiej
//0   wartości są równe
//1   pierwsza wartość jest większa od drugiej

    $a = 15;
    $b = 10;
    $wynik = $a <=> $b;

    //echo gettype($c);
    //echo $wynik.'<br><br>';

####################################################

    $x = null;
    $y = 'test';
    $z = 5;

    $wynik = $x ?? $y ?? $z;
    echo $wynik."<br>";

####################################################

//operator łańcuchowy

    $tekst1 = 'Jan';
    $tekst2 = 'Kowal';
    echo $tekst1.' '.$tekst2.'<br>';
    echo $tekst1,'jan<br>';

//operatory przypisania
// =, +=, -=, *=, /=, %=, .=
//istnieją również operatory bitowe

    $a = 5;
    echo gettype($a); //integer
    $a .= '';
    echo gettype($a); //string
    $b = 10;
    echo gettype($b); //integer
    $a += $b; //15 $a = $a + $b
    $b .= $a; // $b = 10 + 15 = 1015

    echo $b;
    echo gettype($b); //string
    echo '<br><br>';

##################################################

//operator warunkowy

    $x = 5;
    $wynik = ($x > 2)?'x większe od 2':'x nie jest większe od 2';

    if($x > 2)
        echo 'x większe od 2';
    else
        echo 'x nie jest większe od 2';

    echo $wynik.'<br><br>';

####################################################

//operatory rzutowania (konwersji typów)
//int integer, float double real, bool boolean, string, array, //object, unset

    $x = '2';
    echo gettype($x); //string
    $x = (int)$x;
    echo gettype($x); //intege
    $x = (double)$x;
    echo gettype($x); //double
    $x = (unset)$x;
    echo gettype($x); //NULL
    echo '<br><br>';

//Priorytet operatorów

//&& ma większy priorytet niż AND
//|| ma większy priorytet niż OR

##############################################################

//konwersja typów

    $napis = 'Janusz';
    echo gettype($napis);

    $napis = 10;
    echo gettype($napis);

//funkcje konwersji
//intval(), floatval(), doubleval(), strval(), boolval()

    $liczba = 2.5;
    //$liczba = (int)$liczba;
    $liczba = intval($liczba);
    echo gettype($liczba).' '.$liczba;

//settype()

    $liczba1 = 10.5;
    if(settype($liczba1,"int"))
        echo 'Poprawna konwersja na typ całkowity';
    echo gettype($liczba1);

    $liczba2 = 5;
    settype($liczba2,'double');
    echo gettype($liczba2);

    $liczba3 = 0;
    settype($liczba3,'bool');
    echo $liczba3; //false
?>
