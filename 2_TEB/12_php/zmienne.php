<?php
    $a = 1;
    $_liczba = 15;
    $liczba2 = 10;
    $imie_ = "Janusz";
    $Imie_ = "Anna";
    $Imię = "Tomek";    //dozwolone, ale nie polecane (polskie znaki)


    echo "Twoje imię<br>";
    echo "Twoje imię: $imie_ <br>";
    echo 'Twoje imię: $imie_ <br>';

//typ skalarany
//typ boolean

    $prawda = true;
    $falsz = false;

//typ integer

    $calkowita = 50;
    $szesnastkowa = 0xA;
    $osemkowa = 016;
    $binarny = 0b1010;

    echo $binarny;

//typ float

    $zmienna = 10.7;
    echo "$zmienna<br>";

// skladnia heredoc

    $imie = "Filip";
    $napis = <<<TEKST
        Mam na imię $imie <br>
TEKST;

    echo $napis;

//skladnia nowdoc

    $nazwisko = "Kowal";
    $tekst = <<<'ETYKIETA'
    Moje nazwisko: $nazwisko
ETYKIETA;
        
        echo $tekst;
?>