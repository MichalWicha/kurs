<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zmienne globalne</title>
</head>
<body>
    <?php
########################   zmienne globalne   ###################################

        $l = 10; //zmienna globalna

        //echo $l;
        function zmien(){
            //echo "Wartość \$l w funkcji wynosi: $l"; //błąd
            //echo "Wartość \$l w funkcji wynosi: $GLOBALS[l]";
            //echo "Wartość \$l w funkcji wynosi: {$GLOBALS['l']}";
            echo "Wartość \$l w funkcji wynosi: ".$GLOBALS['l'];
        }

        zmien();
        echo "Wartość zmiennej poza funkcją wynosi: $l<br>";

########################   zmienne lokalne   #####################################

        function f(){
            $liczba = 20;
            echo "Zmienna \$liczba wynosi wewnątrz funkcji: $liczba<br>";
        }

        f();
        //echo "Zmienna \$liczba poza funkcją: $liczba<br>";  //błąd

########################    zmienne statyczne   ##################################

        function suma(){
            $x = 4;
            $x += 10; //$x = $x + 10
            echo "Zmienna \$x wynosi: $x<br>";
        }

        suma(); //14
        suma(); //14
        suma(); //14

        function suma1(){
            static $y = 4;
            $y += 10;
            echo "Zmienna \$y wynosi: $y<br>";
        }

        suma1();
        suma1();
        suma1();

############################    przekazywanie argumentów    #########################

//przekazywanie argumentów przez wartość

        function dodajTrzy($l){
            $l = $l + 3;
        }

        $liczba = 5;
        echo "\$liczba przed wywołaniem funkcji wynosi: $liczba <br>"; //5

        dodajTrzy($liczba);
        echo "\$liczba po wywołaniu funkcji wynosi: $liczba <br>"; //5

//przekazywanie argumentów przez referencję &

        function dodajCztery(&$l){
            $l = $l + 4;
        }

        $liczba = 5;
        echo "\$liczba przed wywołaniem funkcji wynosi: $liczba <br>"; //5

        dodajCztery($liczba);
        echo "\$liczba po wywołaniu funkcji wynosi: $liczba <br>"; //9

##############################   argumenty domyślne   ##############################

        function dodaj($x, $y=4) {
            return $x + $y;
        }

        $a = 3;
        echo dodaj(2,6); //8
        echo dodaj($a,$a); //6
        echo dodaj($a); //7
        echo "<br>";

##############################    argumenty i typy danych  ##########################

        function  mnozenie(int $x, int $y = 5){
            return $x * $y;
        }

        echo mnozenie(1); //5
        echo mnozenie(3,5); //15
        echo mnozenie(3.5,4); //12

//zad.1

        /*Napisz funkcję, która będzie przyjmowała dwa argumenty liczbowe z formularza.
        Na ekranie pod  formularzem będzie zwrócony mniejszy z nich np. "Najmniejsza  wartość: .... "
        Podnieś pierwszy podany argument do potęgi drugiego argumentu i wyświetl w formacie: "3 do <indekgórny> 10 wynosi: ......... "*/
    ?>

        <form method="post">
            <input type="number" name="x"> x<br>
            <input type="number" name="y"> y<br>
            <input type="submit" name="przycisk">
        </form>
    <?php
        function potega($x, $y){
            return $x**$y;
        }

        function minimum($x, $y){
            return min($x,$y);
        }

        if (isset($_POST['przycisk']) && !empty($_POST['x']) && (!empty($_POST['y']) || $_POST['y'] == 0)){
            $x = $_POST['x'];
            $y = $_POST['y'];
            echo "Najmniejsza  wartość: ".minimum($x,$y)."<br>";
            echo "$x <sup>$y</sup> wynosi: ".potega($x,$y)."<br>";
        }
    ?>
</body>
</html>
