<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Funkcje</title>
</head>
<body>
    <?php
        //ścisła kontrola typów
        //declare(strict_types=1);

        function f(){
            echo "Janusz<br>";
        }

        f();

        function wyswietl($x){
            echo "Zmienna wynosi: $x <br>";
        }

        wyswietl(3);
        $test = 12;
        wyswietl($test);

        function suma($x,$y){
            $wynik = $x + $y;
            echo "Suma $x i $y wynosi:  $wynik <br>";
        }

        suma(2,5);

        function suma1($x,$y){
            return $x+ $y;
        }
        $srednia = suma1(13,7)/2;
        echo "Suma: ".suma1(13,4)."<br>";
        echo "Średnia: ".$srednia."<br>";
        function f1(){
            echo "test<br>";
            return;
            echo "Janusz<br>";
        }

        f1();

        function calkowita($a){
            return $a;
        }

        echo calkowita(15.5)."<br>";
        $one = calkowita(20.5);
        echo $one;
        echo gettype($one); //double
        echo "<br>";
        function calkowita1($a):int{
            return $a;
        }

        echo calkowita1(15.5)."<br>";
        $two = calkowita1(20.5);
        echo $two;
        echo gettype($two);

        function rzeczywista($x):float {
            return $x;
        }

        echo "<br>";
        echo rzeczywista(4.33);
        $z = rzeczywista(5.55);
        echo gettype($z);

        function nowa():int {
            return 2;
        }

        echo "<br>";
        echo nowa();
    ?>
</body>
</html>
