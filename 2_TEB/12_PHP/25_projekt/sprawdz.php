<?php
  session_start();
  if (isset($_POST['przycisk']) && !empty($_POST['login']) && !empty($_POST['pass'])){
    include_once('./polaczenie1.php');
    if (!$polaczenie->connect_error){
      $login = $polaczenie->real_escape_string(htmlentities($_POST['login']));
      $pass = $polaczenie->real_escape_string(htmlentities($_POST['pass']));
      $sql = "SELECT login, haslo, uprawnienieId, aktywny FROM `administracja` WHERE login='$login' AND haslo='$pass'";
      if($rezultat = $polaczenie->query($sql)){
        if ($rezultat->num_rows > 0){
          $_SESSION['zalogowany'] = true;
          $wiersz = $rezultat->fetch_assoc();
          $uprawnienia =  $wiersz['uprawnienieId'];
          $aktywny =  $wiersz['aktywny'];
          $polaczenie->close();
          if ($aktywny == 'aktywny'){
            $_SESSION['blad'] = false;
            switch($uprawnienia){
              case 1:
                $_SESSION['uprawnienia'] = 'admin';
                header('location: admin.php');
                break;
              case 2:
                $_SESSION['uprawnienia'] = 'sekretariat';
                header('location: sekretariat.php');
                break;
              case 3:
                $_SESSION['uprawnienia'] = 'uczen';
                header('location: uczen.php');
                break;
              case 4:
                $_SESSION['uprawnienia'] = 'gosc';
                header('location: gosc.php');
                break;
            }
          }else{
            header('location: index.php');
            $_SESSION['blad'] = 'Użytkownik nieaktywny';
          }
        }else{
          $_SESSION['blad'] = 'Błędny login lub hasło';
          header('location: index.php');
        }
      }else{
        echo 'Błędne zapytanie';
      }
    }else{
      $_SESSION['blad'] = 'Błędne  połączenie z bazą danych';
      header('location: index.php');
  }
  }else{
    header('location: ./index.php');
  }
?>