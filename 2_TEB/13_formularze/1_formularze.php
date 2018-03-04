<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularze</title>
</head>
<body>
    <h3>Dane Pobrane z formularza </h3>
    <?php
    
    if(isset($_GET['przycisk']) && !empty($_GET['imie']) && !empty($_GET['nazwisko']) && !empty($_GET['haslo']) && ($_GET['haslo'] == $_GET['haslo2'])){
        
    
    $imie = $_GET['imie'];
    $nazwisko = $_GET['nazwisko'];
    $haslo = $_GET['haslo'];
    $haslo2 = $_GET['haslo2'];
    
    echo "<font color='blue'>
    Imie :<b><font color='red'>$imie</font></b><br>
    Nazwisko: <b><font color='red'>$nazwisko</font></b><br>
    Haslo: <b><font color='red'>$haslo</b><br></font>";
    
    }else{
        //echo 'Jestes Januszem';
        header('location: formularze.php');
    }
        
    /*}else{
        ?>
        <script>
            alert('jestes januszem') ;   
        </script>
        
        <?php
        header('Location: formularze.php');
    }*/
    ?>
</body>
</html>