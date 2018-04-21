<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Salon pielęgnacji</title>
  <link rel="stylesheet" href="salon.css">
</head>
<body>
  <div id="baner">
    <h1>SALON PIELĘGNACJI PSÓW I KOTÓW</h1>
  </div>
  <div id="lewy">
    <h3>SALON ZAPRASZA W DNIACH</h3>
  </div>
  <div id="srodkowy">
    <h3>PRZYPOMNIENIE O NASTĘPNEJ WIZYCIE</h3>
    <?php
      if (@$polaczenie = mysqli_connect('localhost', 'root', '', 'salon')){
        $zapytanie = "SELECT `imie`,`rodzaj`,`nastepna_wizyta`,`telefon` FROM `zwierzeta` WHERE `nastepna_wizyta` <> 0";

        if ($rezultat = mysqli_query($polaczenie, $zapytanie)){

            while ($wiersz = mysqli_fetch_row($rezultat)){
              if ($wiersz[1] == 1){
                echo "Pies: $wiersz[0]<br>";
                echo "Data następnej wizyty: $wiersz[2], telefon właściciela: $wiersz[3]<br>";
              }else{
                echo "Kot: $wiersz[0]<br>";
                echo "Data następnej wizyty: $wiersz[2], telefon właściciela: $wiersz[3]<br>";
              }
            }
      }else{
        echo "Błędne zapytanie";
      }

      }else{
        echo "Nie połączyłeś się z bazą danych salon";
      }
    ?>
  </div>
  <div id="prawy">
    <h3>USŁUGI</h3>
    <?php
      $zapytanie = "SELECT `nazwa`,`cena` FROM `uslugi`";
      if ($rezultat = mysqli_query($polaczenie, $zapytanie)){
        while ($wiersz = mysqli_fetch_row($rezultat)){
          echo "$wiersz[0], $wiersz[1]<br>";
        }
      }else{
        echo "Błędne zapytanie";
      }

      mysqli_close($polaczenie);
    ?>
  </div>
</body>
</html>
