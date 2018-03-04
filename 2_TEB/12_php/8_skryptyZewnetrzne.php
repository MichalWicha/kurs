<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skrypty</title>
</head>
<body>
    <?php
        echo 'Tresc pierwszego pliku:<br>';
        require('8_1skryptyZewnetrzne.php');
        echo '<br>Tresc drugiego pliku:<br>';
        include('8_2skryptyZewnetrzne.php');
    ?>
</body>
</html>