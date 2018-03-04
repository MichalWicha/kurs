<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularze</title>
</head>
<body>
    <h3>Dane Pobrane z formularza </h3>
    <?php
    
    $imie = $_GET['imie'];
    $nazwisko = $_GET['nazwisko'];
    $haslo = $_GET['haslo'];
    
    echo "<font color='blue'>
    Imie :<b><font color='red'>$imie</font></b><br>
    Nazwisko: <b><font color='red'>$nazwisko</font></b><br>
    Haslo: <b><font color='red'>$haslo</b><br></font>";
    
    ?>
</body>
</html>