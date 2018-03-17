<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zmienne globalne</title>
</head>
<body>
    <?php
    //zmienne globalne
        $l = 10; //zmienna globalna
        //echo $l;
        function zmien(){
            //echo "Wartosc \$l w funkcji wynosi: $l";
            //echo "Wartosc \$l w funkcji wynosi: $GLOBALS[l]";
            //echo "Wartosc \$l w funkcji wynosi: {$GLOBALS["l"]}";
            echo "Wartosc \$l w funkcji wynosi: ".$GLOBALS['l'];
        }
    
        zmien();
        echo "Wartosc zmiennej poza funkcja wynosi: $l";
    
    //#################  zmienne lokalne  ###########
    
    function f(){
        $liczba = 20;
        echo "Zmienna \$liczba wynosi wewnatrz funkcji: $liczba<br>";
    }
        f();
        //echo "Zmienna \$liczba wynosi poza funkchja: $liczba<br>";blad

    
    ##################### Zmienna Statyczna ####################
    
    function suma(){
        $x = 4;
        $x += 10;
        echo "Zmienna \$x wynosi: $x<br>";
    }
    
    suma(); //x = 14
    suma(); //x = 14
    suma(); //x = 14
    
    
    function suma1(){
        static $y = 4;
        $y += 10;
        echo "Zmienna \$y wynosi : $y<br>";
    }
    
    suma1();
    suma1();
    suma1();
    
    
############################## Przekazywanie argumentow ########
    
//przekazywanie argumentow przez wartosc
    
    function dodajTrzy($l){
        $l = $l + 3;
    }
    
    $liczba = 5;
    echo "\$liczbaprzed wywolaniem funkcjiwynosi: $liczba <br>";
    
    dodajTrzy($liczba);
    echo "\$Lliczba powywolaniu funkcji wynosi: $liczba <br>";
    
//Przekazywanie argumentow przez referencje &
    
    function dodajCztery(&$l){
        $l = $l + 4;
    }
    
    $liczba = 5;
    echo "\$liczbaprzed wywolaniem funkcjiwynosi: $liczba <br>";
    
    dodajCztery($liczba);
    echo "\$Lliczba powywolaniu funkcji wynosi: $liczba <br>";
    
    
############################ argumenty domyslne #############
    
    function dodaj($x, $y=4){
        return $x + $y;
    }
    
    $a = 3;
    echo dodaj (2,4);
    echo dodaj ($a,$a);
    echo dodaj ($a);
    echo "<br>";
    
    
########### Argumenty i typy danych ################
    
    function mnozenie(int $x, int $y = 5){
        return $x * $y;
    }
    
    echo mnozenie(1);//5
    echo mnozenie(3.5);//15
    echo mnozenie(3.5,4);//15
    
    ?>
</body>
</html>