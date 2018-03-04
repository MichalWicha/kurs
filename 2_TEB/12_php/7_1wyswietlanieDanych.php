<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wyswietlanie danych</title>
</head>
<body>
   <?php
        echo "Twoje dane:<h2>"
    ?>
    Janusz Kowal<br>
    Wiek:
    <?php
        $wiek = 25;
        echo $wiek;
        echo "<h2>";
        echo "zwykly tekst";
    ?>
    <?=2+4 ?>
    
</body>
</html>
