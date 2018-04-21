<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Pliki i foldery - sortowanie</title>
</head>
<body>
    <?php
        $dir = "./test";

        if (!($folder = opendir($dir))){
            exit("Nie można otworzyć folderu");
        }else{
             $sortuj = 0;
             $pliki = array();
             $katalogi = array();

             $dane = scandir($dir, $sortuj);

                foreach ($dane as $wartosc){
                    if ($wartosc != '.' && $wartosc != '..')
                        if (is_file($dir."/".$wartosc)){
                            $pliki[] = $wartosc;
                        }else{
                            $katalogi[] = $wartosc;
                        }
                }

             closedir($folder);
             //echo $katalogi[0];

             if (isset($_GET['sortuj'])){
                 $sortuj = $_GET['sortuj'];
                 if ($sortuj == 0){
                     sort($pliki);
                     sort($katalogi);
                 }else{
                     rsort($pliki);
                     rsort($katalogi);
                 }
             }

             echo "<h3>Pliki</h3>";
             echo "<ul>";
                foreach ($pliki as $wartosc){
                    echo "<li>$wartosc</li>";
                }
             echo "</ul><hr>";

             echo "<h3>Katalogi</h3>";
             echo "<ul>";
                foreach ($katalogi as $wartosc){
                    echo "<li>$wartosc</li>";
                }
             echo "</ul><hr>";
        }
    ?>
    <a href="2_1_sortowanie.php?sortuj=0">Sortuj rosnąco</a>
    <a href="2_1_sortowanie.php?sortuj=1">Sortuj malejąco</a>
</body>
</html>
