<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularze</title>
</head>
<body>
   <!--
       method - get (domyślne), post
   -->
    <form action="13_2_formularze.php" method="get">
        <input type="text" name="imie" placeholder="Janusz" autofocus><br><br>
        <input type="text" name="nazwisko" placeholder="Kowal"><br><br>
        <input type="password" name="haslo" placeholder="haslo1"><br><br>
        <input type="password" name="haslo2" placeholder="haslo2"><br><br>
        <input type="submit" name="przycisk" value="Zatwierdź">
    </form>
</body>
</html>
