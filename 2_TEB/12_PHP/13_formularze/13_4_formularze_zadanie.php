<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Pole i obwód</title>
</head>
<body>
    <!--
        zad.1
        Użytkownik podaje z klawiatury dwie długości
        do wyboru w polu radio ma: pole, obwód
        domyślnie zaznaczone ma być "pole"
        zabezpiecz formularz przed wysałaniem pustych pól
        Wynik ma być wyświetlony pod formularzem w formacie:
        Pole wynosi: 20cm2
        Obwód wynosi: 20cm
    -->

    <form action="./13_4_formularze_zadanie.php" method="post">
            x: <input type="number" name="x"><br>
            y: <input type="number" name="y"><br>
            <input type="radio" name="wybor" value="p" checked>Pole
            <input type="radio" name="wybor" value="o">Obwód<br>
            <input type="submit" name="przycisk" value="oblicz">
    </form>
    <?php
        if (!empty($_POST['x']) && !empty($_POST['y']) && isset($_POST['przycisk'])){
            $x = $_POST['x'];
            $y = $_POST['y'];
            if($x > 0 && $y > 0 ){
                if ($_POST['wybor'] == 'p'){
                    echo "Pole wynosi: ".$x * $y."cm<sup>2</sup>";
                }else{
                    $wynik = 2* $x + 2 * $y;
                    echo "Obwód wynosi: ".$wynik."cm";
                }
            }
        }
    ?>
</body>
</html>
