<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularze</title>
</head>
<body>
   <!--
       method - get(domyslnie), post
   
   -->
   
    <form action="1_formularze.php" method="get">
        <input type="text" name="imie" placeholder="Janusz" autofocus>
        <br><br>
        <input type="text" name="nazwisko" placeholder="Kowal"><br><br>
        <input type="password" name='haslo'>
        <input type='submit' name="Przycisk" value= "zatwierdz">
    </form>
</body>
</html>