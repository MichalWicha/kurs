<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Otwieranie plików</title>
</head>
<body>
   <?php
        $dir = "./test";
        $plik = "kurs.txt";
      if (isset($_GET['przycisk'])){
        $nowyTekst = $_GET['area'];
        //echo  $nowyTekst;

        if ($fd = fopen($dir."/".$plik,'w+')){     //nadpisuje
        //if ($fd = fopen($dir."/".$plik,'a')){   //dopisuje
          if (fwrite($fd, $nowyTekst) === false){
            echo "Błąd zapisu";
          }else{
            echo "Plik zapisany poprawnie";
          }
          fclose($fd);
        }else{
          echo "Nie można otworzyć pliku o nazwie $plik";
        }
      }



//#####################

      echo "<br>Wolne miejsce na partycji: ";  //bajty
      $wolneMiejsce = round(disk_free_space("/") / (1024 * 1024),2);
      echo "$wolneMiejsce MiB";
      echo "<br>Pojemność dysku: ";
      $dysk = round(disk_total_space("/") / (1024**3),2);
      echo "$dysk GiB<br>";

      //otwarcie i wyświetlenie pliku w polu area

      if (!$fd = fopen($dir."/".$plik, 'r')){
        echo "Nie można otworzyć pliku";
      }else{
        $rozmiar = filesize($dir."/".$plik);
        //echo "$rozmiar Bajty";
        $tekst = fread($fd, $rozmiar);
        fclose($fd);
      }

      ?>

  <form>
    <textarea name="area" cols="40" rows="15">
      <?php
        echo $tekst;
      ?>
    </textarea><br>
    <input type="submit" name="przycisk" value="Zapisz">
  </form>
</body>
</html>
