<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Logowanie</title>
</head>
<body>
   <h3>Formularz logowania</h3>
  <?php
    session_start();
    $_SESSION['zalogowany'] = 0;
    $_SESSION['blad'] = false;
    if (isset($_POST['przycisk']) && !empty($_POST['login']) && !empty($_POST['haslo'])){
      if ($polaczenie = mysqli_connect('localhost', 'root', '', 'teb')){
        $login = $_POST['login'];
        $login = htmlentities($login);
        $login = htmlspecialchars($login, ENT_QUOTES);
        echo $login;
        $haslo = $_POST['haslo'];


        mysqli_set_charset($polaczenie, "utf8");

        $zapytanie = "SELECT `imie`,`nazwisko`,`miasto` FROM `uzytkownicy` WHERE login='$login' AND haslo='$haslo'";

        if ($rezultat = mysqli_query($polaczenie, $zapytanie)){
          $wiersz = mysqli_fetch_assoc($rezultat);
          if (mysqli_num_rows($rezultat)){
            echo "<h3>Twoje dane:</h3>";
            $wyswietl = "Imię: $wiersz[imie]<br>";
            $wyswietl .= "Nazwisko: $wiersz[nazwisko]<br>";
            $wyswietl .= "Miasto: $wiersz[miasto]<br><br>";
            echo $wyswietl;
            $_SESSION['zalogowany'] = 1;
            echo "<a href=\"wyloguj.php?wyloguj=\">Wyloguj się</a>";
          }else{
            $_SESSION['zalogowany'] = 0;
            $_SESSION['blad'] = "Błędne dane logowania";
          }
        }else{
          echo "Błędne zapytanie";
        }
      }else{
        echo "Błędne połączenie z bazą";
      }
    }else{
      if (isset($_POST['przycisk'])){
        $_SESSION['blad'] = 'Wprowadź wszystkie dane logowania';
      }
    }
  if ($_SESSION['blad']){
    echo $_SESSION['blad'];
  }
  if ($_SESSION['zalogowany'] == 0){
  echo <<<FORM
    <form method="post">
      <input type="text" name="login" placeholder="Login"><br><br>
      <input type="password" name="haslo" placeholder="Hasło"><br><br>
      <input type="submit" name="przycisk" value="Zaloguj się">
    </form>
FORM;
    }

  /*
    Zad.dom.
    Utworzyć bazę z  samochodami o nazwie komis,
    utwórz  tabelę o nazwie: auta i klienci,
    stwórz relację 1 do n.
    Na stronie użytkownik wybiera w formularzu model i markę auta.
    Wyświetl wszystkie dane o aucie nastronie.
    Do wyboru użytkownik bedzie miał markę i możliwość wyświetlenia
    właścicieli auta.

    * na stronie można się zalogować, tylko użytkownikom zalogowanym wyświetlą się wszystkie dane klientów
  */
  ?>
</body>
</html>
