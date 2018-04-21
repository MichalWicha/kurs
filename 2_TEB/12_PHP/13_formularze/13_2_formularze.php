<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularze</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Dane pobrane z formularza</h3>
    <?php

        if(isset($_GET['przycisk']) && !empty($_GET['imie']) && !empty($_GET['nazwisko']) && !empty($_GET['haslo']) && ($_GET['haslo'] == $_GET['haslo2'])){

        echo '<span class="niebieski">';
        $imie = $_GET['imie'];
        $nazwisko = $_GET['nazwisko'];
        $pass = $_GET['haslo'];
        $tekst =  'Imię: <span style="color:red;font-weight:bold">'.$imie;
        $tekst .= "</span><br>Nazwisko: <span class='czerwony'>$nazwisko</span><br>";
        $tekst .= "Hasło: <span class='czerwony'>$pass</span><br>";
        echo $tekst;
        echo '</span>';
        }else{
            //echo 'Jesteś Januszem';
            header('Location: 13_1_formularze.php');
        }

    //wyświetlić alert a po dwóch sekundach przekierować na poprzednią stronę
        /*}else{
            ?>
                <script>
                        alert('Jesteś Januszem');
                </script>
            <?php
        }*/
    ?>
</body>
</html>
