<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Data i czas</title>
</head>
<body>
    <?php

###############################  funkcja date  #######################################

       echo 'rok - miesiac - dzień: '.date("Y-m-d")."<br>";//rok - miesiac - dzień: 2018-03-17
       echo date("d-m-Y")."<br>"; //17-03-2018
       echo date("j M Y ")."<br>"; //17 Mar 2018
       echo date("jS ,M Y")."<br>"; //17th ,Mar 2018
       echo date("G:i:s")."<br>"; //14:23:32
       echo date("h:i:sa")."<br>"; //02:24:11pm
       echo date("Y-m-d G:i:s")."<br>"; //2018-03-17 14:25:15
       echo date("w")."<br>"; //6

###############################  funkcja getdate  ####################################

       $data = getdate();
       $dzien = $data['mday'];
       if ($dzien < 10){
           $dzien = "0".$dzien;
       }
       $miesiac = $data['mon'];
       if ($miesiac < 10){
           $miesiac = "0".$miesiac;
       }
       $rok = $data['year'];

       $dzienTygodnia =$data["wday"];

       //echo $dzien." ".$miesiac." ".$rok." ".$dzienTygodnia;

//zad. 1

    /*Wyświetl datę w następującymformacie:
    17 marzec 2018 | sobota*/

    switch ($miesiac){
        case 1: $miesiac = 'styczeń';
        break;
        case 2: $miesiac = 'luty';
        break;
        case 3: $miesiac = 'marzec';
        break;
        case 4: $miesiac = 'kwiecień';
        break;
        case 5: $miesiac = 'maj';
        break;
        case 6: $miesiac = 'czerwiec';
        break;
        case 7: $miesiac = 'lipiec';
        break;
        case 8: $miesiac = 'sierpień';
        break;
        case 9: $miesiac = 'wrzesień';
        break;
        case 10: $miesiac = 'październk';
        break;
        case 11: $miesiac = 'listopad';
        break;
        case 12: $miesiac = 'grudzień';
        break;
    }

    switch ($dzienTygodnia){
        case 1:
            $dzienTygodnia = 'poniedziałek';
            break;
        case 2:
            $dzienTygodnia = 'wtorek';
            break;
        case 3:
            $dzienTygodnia = 'środa';
            break;
        case 4:
            $dzienTygodnia = 'czwartek';
            break;
        case 5:
            $dzienTygodnia = 'piątek';
            break;
        case 6:
            $dzienTygodnia = 'sobota';
            break;
        case 7:
            $dzienTygodnia = 'niedziela';
            break;
    }

         echo $dzien." ".$miesiac." ".$rok." | ".$dzienTygodnia."<br>";


##################################    mktime     ######################################

    $rok1 = 2018;
    $miesiac1 = 3;
    $dzien1 = 17;

    $rok2 = 1968;
    $miesiac2 = 3;
    $dzien2 = 16;

    $time1 = mktime(0,0,0,$miesiac1, $dzien1, $rok1);
    $time2 = mktime(0,0,0,$miesiac2, $dzien2, $rok2);
    $time = abs(ceil(($time1 - $time2)/86400));
    echo $time1."<br>";
    echo $time2."<br>";
    echo $time."dni pomiędzy time1 i time2<br>";

###############################   microtime   #########################################

    $t1 = microtime(true);

   /* for ($i = 0; $i < 20000; $i++)
        for ($j = 0; $j < 1000; $j++)*/


    $t2 = microtime(true);

    $t = round($t2 - $t1,4);
    echo "Skrypt wykonywał się: ".$t."sekundy<br>";

#########################

    echo strtotime("now")."<br>"; //1521296263
    echo strtotime("28 january 1995")."<br>"; //791247600
    echo strtotime("-1 day")."<br>"; //1521210254
    echo strtotime("+3 day 5 hours 14 minutes 10 seconds")."<br>"; //1521574827
    echo strtotime("next saturday")."<br>"; //1521846000
    echo strtotime("next day")."<br>"; //1521383264

########################

    ?>

    <form>
        <input type="date" name="data">
        <input type="submit">
    </form>
        <?php
            if (isset($_GET['data'])){
                echo $_GET['data']."<br>";
                echo strtotime($_GET['data'])."<br>";
            }

//zad.1
    /*Napisz skrypt, który będzie wyświetlał stronę w  zależności od pory dnia. wykorzystaj instrukcję include
    od 6 - 18 dzień dobry 16_dzien.php
    od 18 - 6 dobry  wieczór 16_wieczor.php
    */
    ?>
       <form>
           <input type="text" name="imie" placeholder="Wpisz imię">
           <input type="submit" name="przycisk">
       </form>
       <?php
            $godz = date('G');
            //echo $godz;
            if (isset($_GET['przycisk'])){
            if ($godz >= 6 && $godz <=18){
                include('16_dzien.php');
            }else{
                include('16_wieczor.php');
            }
                }
       ?>
</body>
</html>
