<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ciągi znakowe</title>
</head>
<body>
   <?php
        $liczba = 10;
        $ciag = 'test';
        $wiek = 25;

        $text1 = "\$liczba wynosi: $liczba";
        $text2 = "\$liczba wynosi: $liczba";

//heredoc

        $text3 = <<<"ID"
        Masz $wiek lat
ID;

    echo $text3;

//nowdoc

        $text4 = <<<'TEKST'
        Masz $wiek lat
TEKST;

    echo $text4;

    echo <<<TEST
        Janusz $wiek
TEST;

    $s1 = 'abc';
    $s2 = 'def';

    //$s3 = $s1 + $s2; //błąd
    //echo $s3; //błąd

    $s3 = $s1.$s2;
    echo $s3;

    echo $s1," ",$s2,$wiek;

//szybkość wyświetlania ciągów znakowych

//heredoc ze zmienną (najszybsza), cudzysłów, heredoc bezpośrednio, apostrof, przecinek (5-krotnie wolniejsza niż pozostałe)
    ?>
    <form>
        <input type="text" name="kraj">
        <input type="number" name="wiek" placeholder="wiek">
        <input type="text" name="imie" placeholder="imie">
        <input type="submit" name="przycisk">
    </form>
        <?php
            if (!empty($_GET['kraj'])){
                $panstwo = $_GET['kraj'];
            }else{
                $panstwo = 'brak';
            }
            echo "Twój kraj: $panstwo<br>";

            $wiek = $_GET['wiek'] ?? 'brak';
            echo "Twój wiek: $wiek";

            $imie = isset($_GET['imie']) ? $_GET['imie'] : 'brak imienia';
            //$imie = isset($_GET['imie']) ?? $_GET['imie'] ?? 'brak imienia';

            echo "<br>Twoje imię: $imie";

//spaceship

        $a = 'a';
        $b = 'b';

        echo $a <=> $b; //-1
        echo 'c' <=> 'c'; //0
        echo 'd' <=> 'c'; //1

//grawis, lewy apostrof

        //$polecenie = `dir /ah`;
        $polecenie = `echo janusz > testttttttt.txt`;
        //$polecenie = `attrib -h 7_1_wyswietlanie_danych.php`;
        //echo $polecenie;
        echo "<pre> $polecenie </pre>";

#########################   nl2br()   ##########################

        $wiersz = <<<ID
        Mam
        na imię
        Janusz
ID;

        echo "<h3>Przed użyciem funkcji nl2br:</h3>";
        echo $wiersz;
        echo "<h3>Po użyciu funkcji nl2br:</h3>";
        echo nl2br($wiersz);

##############   funkcje zmieniające wielkość liter   #################

        $ciag = "maM nA iMię janUsZ<br>";
        echo $ciag;

        $male = strtolower($ciag);
        $duze = strtoupper($ciag);
        $pierwszaDuza = strtolower($ciag);
        $pierwszaDuza = ucfirst($pierwszaDuza);
        $wyrazy = ucwords($pierwszaDuza);

        echo $wyrazy;

//zad.1

  /*Użytkownik podaje w formularzu swoje imię i nazwisko
  Dane wyślij bezpiecznie
  Zabezpiecz przed brakiem  podania danych
  Zabezpiecz przed błędnymi danymi w polu typu text
  Ogranicz wprowadzanie danych do liter w imieniu (małe lub duże max. 20 znaków)
  Ogranicz wprowadzanie danych do liter i myślnika w nazwisku (małe lub duże  max. 40 znaków)
  Zamień wszystkie dane na małe litery a pierwszą na  dużą literę

  Wyświetl dane w formacie: Imię: ....., nazwisko: .........
  np. Imię: Jan, nazwisko: Kowal*/
        ?>

        <form method="post">
           <!-- <input type="text" name="i" pattern="([a-z]|[A-Z]){2,20}">-->
            <input type="text" name="i" pattern="([a-z]|[A-Z]){2,20}">
            <!--<input type="text" name="n" pattern="[a-z]{2,20}">-->
            <input type="text" name="n" pattern="([a-z]|[A-Z]){2,20}(-{1}([a-z]|[A-Z]){2,20})?">
            <input type="submit" name="p">
        </form>
        <?php
            if (isset($_POST['p']) && !empty($_POST['i']) && !empty($_POST['n'])){
                //$i = !empty($_POST['i']) ? $_POST['i'] : 'brak danych';
                //$n = !empty($_POST['n']) ? $_POST['n'] : 'brak danych';

                $i = $_POST['i'];
                $n = $_POST['n'];

                $i = strtolower($i);
                $i = ucfirst($i);
                $n = strtolower($n);
                $n = ucfirst($n);

                echo "<br>Twoje imię: ".$i;
                echo "<br>Twoje nazwisko: ".$n;
            }

        ?>
</body>
</html>
