<?php
    session_start();
    if(isset($_SESSION['zalogowany']) && $_SESSION['uprawnienia'] == 'admin'){
        $usun = $_GET['usun'];
        include_once('polaczenie.php');
        if (!$polaczenie->connect_error){
            $sql = "DELETE FROM `administracja` WHERE `administracja`.`idAdministracja` = $usun";
            if($rezultat = $polaczenie->query($sql)){
                $_SESSION['blad'] = 'Usunieto uzytkownika';
                header('location: admin.php');
                
            }else{
                
                $_SESSION['blad'] = 'Bledne zapytanie do bazy, nie usunieto uzytkownika';
                header('location: admin.php');
            }
            
            
        }else{
            
            $_SESSION['blad'] = 'Bledne polaczenie z baza, nie usunieto uzytkownika';
            header('location: admin.php');
        }
    }else{
        header('location: index.php');
    }
?>