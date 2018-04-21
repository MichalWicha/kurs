<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zmienne superglobalne</title>
</head>
<body>
   <?php

//zmienne superglobalne

        echo $_SERVER['SERVER_PORT']."<br>"; //80
        echo $_SERVER['SCRIPT_NAME']."<br>"; ///git/kursy/2_TEB/12_PHP/18_zmienne_superglobalne.php
        echo $_SERVER['SERVER_PROTOCOL']."<br>"; //HTTP/1.1
        echo $_SERVER['DOCUMENT_ROOT']."<br>"; //C:/xampp/htdocs

        $plik = $_SERVER['DOCUMENT_ROOT'];
        $plik .= $_SERVER['SCRIPT_NAME'];
        echo $plik."<br>";

//stałe predefiniowane

        echo PHP_VERSION."<br>"; //7.2.3
        $ver = PHP_VERSION;

        if ($ver >= 7.2){
            echo "Nowa wersja php<br>";
        }else{
            echo "Stara wersja php<br>";
        }

        echo PHP_OS."<br>";
        echo __LINE__."<br>";
        echo __FILE__."<br>";
        echo __DIR__."<br>";
    ?>
</body>
</html>
