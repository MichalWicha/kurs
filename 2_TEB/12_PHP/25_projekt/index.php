<?php
  session_start();
  if (isset($_SESSION['zalogowany'])){
    switch($_SESSION['uprawnienia']){
              case 'admin':
                header('location: admin.php');
                break;
              case 'sekretariat':
                header('location: sekretariat.php');
                break;
              case 'uczen':
                header('location: uczen.php');
                break;
              case 'gosc':
                header('location: gosc.php');
                break;
            }
  }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Szkoła</title>
</head>
<body>
  <h3>Logowanie</h3>
  <?php
    if (isset($_SESSION['blad'])){
      echo $_SESSION['blad'];
    }
  ?>
  <form action="sprawdz.php" method="post">
    <input type="text" name="login" placeholder="login"><br><br>
    <input type="password" name="pass" placeholder="hasło"><br><br>
    <input type="submit" name="przycisk">
  </form>
</body>
</html>