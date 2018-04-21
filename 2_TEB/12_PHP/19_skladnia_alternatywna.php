<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Składnia alternatywna</title>
</head>
<body>
    <?php
    //instrukcja if

        $x = 2;
        $y = 4;

        if ($x < $y){
            echo "Zmienna x jest mniejsza od zmiennej y<br>";
        }

        if ($x < $y):
            echo "Zmienna x jest mniejsza od zmiennej y<br>";
        endif;

    //instrukcja if...else

        if ($x < $y){
            echo "Zmienna x jest mniejsza od zmiennej y<br>";
        }else{
            echo "Zmienna x nie jest mniejsza od zmiennej y<br>";
        }

        if ($x < $y):
            echo "Zmienna x jest mniejsza od zmiennej y<br>";
        else:
            echo "Zmienna x nie jest mniejsza od zmiennej y<br>";
        endif;

    //instrukcja if...else...if

        if ($x < $y){
            echo "Zmienna x jest mniejsza od zmiennej y<br>";
        }else if ($x == $y){
            echo "Zmienna x jest równa zmienna y<br>";
        }else{
            echo "Zmienna x nie jest mniejsza od zmiennej y<br>";
        }

// elseif zapisać łącznie!!!!!!!!!

        if ($x < $y):
            echo "Zmienna x jest mniejsza od zmiennej y<br>";
        elseif ($x == $y):
            echo "Zmienna x jest równa zmienna y<br>";
        else:
            echo "Zmienna x nie jest mniejsza od zmiennej y<br>";
        endif;

    //instrukcja switch

        $a = 5;

        switch($a){
            case 0:
                echo "Zmienna a==0<br>";
                break;
            case 5:
                echo "Zmienna a==5<br>";
                break;
            case 10:
                echo "Zmienna a==10<br>";
                break;
        }

        switch($a):
            case 0:
                echo "Zmienna a==0<br>";
                break;
            case 5:
                echo "Zmienna a==5<br>";
                break;
            case 10:
                echo "Zmienna a==10<br>";
                break;
        endswitch;

    //pętla for

        for ($i=0; $i<=5; $i++){
            echo "$i ";
        }

        for ($i=0; $i<=5; $i++):
            echo "$i ";
        endfor;

    //while
        echo "<br>";
        $i = 2;
        while($i <= 5){
            echo "$i ";
            $i++;
        }

        while($i <= 15):
            echo "$i ";
            $i++;
        endwhile;

    //break, if, for

        for ($i=1; $i < 10; $i++){
            echo "Zmienna i wynosi: $i <br>";
                if($i == 5){
                    break;
                }
        }

        for ($i=1; $i < 10; $i++):
            echo "Zmienna i wynosi: $i <br>";
                if($i == 5):
                    break;
                endif;
        endfor;


    //continue, if, for

        for ($i=1; $i < 10; $i++){
                if($i == 5)
                   continue;
                echo "$i  ";
        }


        for ($i=1; $i < 10; $i++):
                if($i == 5):
                   continue;
                endif;
                    echo "$i  ";
        endfor;
    ?>
</body>
</html>
