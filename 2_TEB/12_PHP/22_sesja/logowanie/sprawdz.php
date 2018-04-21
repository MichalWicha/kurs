<?php
    session_start();
    if (isset($_POST['przycisk']) && !empty($_POST['login']) && !empty($_POST['haslo'])){
        $login = htmlentities($_POST['login']);
        $haslo = htmlentities($_POST['haslo']);
        //echo "$login $haslo";
        if ($login == 'jan' && $haslo == 'tajne'){
            $_SESSION['zalogowany'] = true;
            $_SESSION['login'] = $login;
            unset($_SESSION['bload']);
            header('Location: ./zalogowany.php');
        }else{
            $_SESSION['blad'] = 'Błędne dane logowania<br><br>';
            header('Location: ./index.php');
        }
    }else{
        $_SESSION['blad'] = 'Uzupełnij wszystkie dane logowania<br><br>';
        header('Location: ./index.php');
    }



?>
