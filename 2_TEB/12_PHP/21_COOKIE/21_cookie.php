<?php
     if(!isset($_COOKIE['szkola'])):
            setcookie('szkola', 'TEB');
            $komunikat = 'Cookie o nazwie szkoła nie było ustawione';
        else:
            $komunikat = 'Cookie o nazwie szkoła jest ustawione<br>';
            $komunikat .= "Jego zawartość to: ".$_COOKIE['szkola'];
        endif;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Cookie</title>
</head>
<body>
    <?php
        //setcookie('imie','Janusz',time()+15);

        echo $komunikat;


    ?>
</body>
</html>
