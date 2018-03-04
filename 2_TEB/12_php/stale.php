<?php
    $zmienna = 'Janusz';
    $zmienna = 'Agata';
    echo "$zmienna<br>";

    define('PI', 3.14150);
    echo PI."<br>";
    //PI = 3.14 stalej nie mozemy zmienic wartosci

    const NARODOWOSC = 'polska';
    echo NARODOWOSC;


/*
    utworz zmienna imie,
    dwie stale: miasto, kraj (dodaj swoje dane),
    Dane wyswietl w formacie:
    
    Imie: ....
    Miasto: ...
    Kraj: ....
    */

    $imie = 'Michal';
    const MIASTO = 'Steszew';
    const KRAJ = 'Polska';
    echo "<br>imie: $imie<br>";
    echo "Miasto: ".MIASTO."<br>";
    echo "Kraj:".KRAJ."<br>";
    
?>