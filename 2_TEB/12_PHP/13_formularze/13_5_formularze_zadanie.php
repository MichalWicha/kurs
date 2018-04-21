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

    <form method="post">
            x: <input type="number" name="x"><br>
            y: <input type="number" name="y"><br>
            <input type="radio" name="wybor" value="p" checked>Pole
            <input type="radio" name="wybor" value="o">Obwód<br>
            <input type="submit" name="przycisk" value="oblicz">
    </form>
    <?php
       require('13_5_1_formularze_zadanie1.php');
    ?>
</body>
</html>
