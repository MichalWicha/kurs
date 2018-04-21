<?php
    session_start();
    if (!isset($_SESSION['zalogowany'])){
        header('Location: ./index.php');
    }

    if (!isset($_COOKIE['wizyta'])){
        $wizyta = 'Witaj pierwszy raz na naszej stronie!<br><br>';
    }else{
        $wizyta = 'Witaj ponownie na naszej stronie<br><br>';
    }

    setcookie('wizyta', true, time() + 60*60*24*365*10);

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zalogowany</title>
</head>
<body>
    <h2>Witaj
    <?php
        echo $_SESSION['login'];
    ?>
    na stronie!</h2>
    <?php
        echo $wizyta;
    ?>
    <br>
    <a href="./wyloguj.php?wyloguj=">Wyloguj się</a>
</body>
</html>
