<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Skrypty zewnętrzne</title>
</head>
<body>
    <?php
        echo 'Treść pierwszego pliku:<br>';
        require('8_2_skrypty_zewnetrzne.php');
        echo '<br>Treść drugiego pliku:<br>';
        include('8_3_skrypty_zewnetrzne.php');
    ?>
</body>
</html>
