<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Tablice</title>
</head>
<body>

    <?php

    //tablice indeksowane numerycznie

        $kolory = array('biały', 'zielony', 'czerwony', 'aqua');
        echo "Ilość elementów w tablicy: ".count($kolory)."<br>";
        echo  'Początkowa zawartość tablicy: <br>';
        $kolory[0] = 'czarny';

        /*for ($i=0; $i<count($kolory); $i++):
                $x = $i + 1;
                echo "Element[$x]: $kolory[$i] <br>";
        endfor;*/

        function wyswietl($t){
            for ($i=0; $i<count($t); $i++):
                $x = $i + 1;
                echo "Element[$x]: $t[$i] <br>";
            endfor;
        }

        wyswietl($kolory);

        $auta = ['Ferrari', 'Bugatti', 'Lexus'];
        wyswietl($auta);

##############################  tablice asocjacyjne   ################################

        $dane = array(
            'imie' => 'Janusz',
            'nazwisko' => 'Nowak',
            'miasto' => 'Poznań',
            'wiek' => 18
        );

        //echo $dane[0]; //błąd
        echo $dane['imie']."<hr>";

        $z = <<<TAB
        Imię: $dane[imie]
        Nazwisko: $dane[nazwisko]
        Wiek: $dane[wiek]
TAB;

        echo nl2br($z);

##################################   FOREACH   ####################################

    echo "<br>Foreach<br>";
        foreach ($dane as $wartosc){
            echo "Wartość: $wartosc<br>";
        }

        foreach ($dane as $klucz => $wartosc){
            $klucz = ucfirst($klucz);
            echo "$klucz: $wartosc<br>";
        }

##############################  TABLICA WIELOWYMIAROWA  ###########################

    $cyfry = array(
        array(1,2,3,4),
        array(5,6,7),
        array(8),
        array(9,10)
    );

    foreach ($cyfry as $wartosc){
        foreach ($wartosc as $x){
            echo "$x ";
        }
        echo '<br>';
    }

###############################    SORTOWANIE     #################################

        $tab = array(10,1,5,7,48,65,78,7);

        function w($tab){
            foreach ($tab as $w):
                echo "$w ";
            endforeach;
            echo "<br>";
        }

        w($tab);

//rosnąco

        sort($tab);
        w($tab);

//malejąco

        rsort($tab);
        w($tab);

###############################################################################

        $tab = array("Julia", "Anna", "Tomek", "Martyna");

        w($tab);
        sort($tab);
        w($tab);

###############################################################################

        $tab = array("Julia", "anna", "Tomek", "Martyna");

        w($tab);
        sort($tab);
        w($tab);

#########################   SORTOWANIE TABLICY ASOCJACYJNEJ   #################

    $nazwiska = array (
        //'pierwszy' => '2nowak',
        'pierwszy' => 'nowak',
        'drugi' => 'kowal',
        'trzeci' => 'ananas',
        'czwarty' => 'zając'
    );

        w($nazwiska);
        //asort($nazwiska); //ananas kowal nowak zając
        //arsort($nazwiska);  //zając nowak kowal ananas
        //ksort($nazwiska); //zając kowal nowak ananas
        //krsort($nazwiska); //ananas nowak kowal zając
        w($nazwiska);

##############################   WYŚWIETLANIE TABLICY   #########################

    $tab4 = array(2,1,'Janusz',3.5,8);
    echo "<br>";

    var_dump($tab4);

    echo '<br>';

    print_r($tab4);

    echo '<pre>';
        print_r($tab4);
    echo '</pre>';

//zad. 1
    /*
    użytkownik z formalarza wysyła dane: imie, nazwisko, miasto, wiek
    zapisz dane w tablicy asocjacyjne (klucze nazwij jak powyżej)
    Utwórz funkcję zawierającą heredoc i wyświetlającą informacje poniżej
    Jesteś [imie] [nazwisko] masz [wiek] lat, mieszkasz w [miasto]
     */
    ?>

    <form>
        <input type="text" name="i1" placeholder="imie">
        <input type="text" name="n1" placeholder="nazwisko">
        <input type="text" name="m" placeholder="miasto">
        <input type="number" name="w" placeholder="wiek">
        <input type="submit" name="p1">
    </form>
    <?php

        if (isset($_GET['p1']) && !empty($_GET['i1']) && !empty($_GET['n1']) && !empty($_GET['m']) && !empty($_GET['w'])){
            $imie = $_GET['i1'];
            $nazwisko = $_GET['n1'];
            $miasto = $_GET['m'];
            $wiek = $_GET['w'];

            function wys($a,$b,$c,$d){
                echo <<<E
                Jesteś $a $b masz $d lat, mieszkasz w $c
E;
            }

            $daneUzytkownika = array(
                'imie' => $imie,
                'nazwisko' => $nazwisko,
                'miasto' => $miasto,
                'wiek' => $wiek
            );
            /*echo '<pre>';
            echo print_r($daneUzytkownika);
            echo '</pre>';*/

            wys($daneUzytkownika['imie'], $daneUzytkownika['nazwisko'], $daneUzytkownika['miasto'], $daneUzytkownika['wiek']);
        }
    ?>

    <form>
        <input type="text" name="k1" pattern="[ążśźęćńóła-z]{3,30}">
        <input type="text" name="k2" pattern="[ążśźęćńóła-z]{3,30}">
        <input type="text" name="k3" pattern="[ążśźęćńóła-z]{3,30}">
        <input type="submit" name="p2"><br>

        <?php
            if(isset($_GET['p2']) && ($_GET['k1'] || $_GET['k2'] || $_GET['k3'])){
                $t = [];

                    $l = !empty($_GET['k1']) ? 1 : 0;
                        if(!empty($_GET['k1']))
                            $t[] = $_GET['k1'];
                    $l += !empty($_GET['k2']) ? 1 : 0; // $l = $l + ...
                        if(!empty($_GET['k2']))
                            $t[] = $_GET['k2'];
                    $l += !empty($_GET['k3']) ? 1 : 0;
                        if(!empty($_GET['k3']))
                            $t[] = $_GET['k3'];

                //echo $t[0];
                if($l >= 2)
                    echo "Wprowadziłeś $l kolory<br>";
                else
                    echo "Wprowadziłeś $l kolor<br>";

                foreach ($t as $k => $w){
                    $x = ++$k;
                    echo "$x kolor: $w <br>";
                }
            }
        ?>
    </form>
</body>
</html>
