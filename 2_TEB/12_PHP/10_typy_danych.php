<?php
    $z1 = 10;
    echo "Wartość zmiennej  \$z1 wynosi: $z1 <br>";
    echo "Typdanych zmiennej \$z1: ";
    echo gettype($z1); //integer

    $z2 = 5.15;
    echo "<br><br>Wartość zmiennej  \$z2 wynosi: $z2 <br>";
    echo "Typdanych zmiennej \$z2: ";
    echo gettype($z2); //double

    $z3 = 'tekst';
    echo "<br><br>Wartość zmiennej  \$z3 wynosi: $z3 <br>";
    echo "Typdanych zmiennej \$z3: ";
    echo gettype($z3); //string

    $z4 = true;
    echo "<br><br>Wartość zmiennej  \$z4 wynosi: $z4 <br>";
    echo "Typdanych zmiennej \$z4: ";
    echo gettype($z4); //boolean
    echo '<br>';

    $z5 = array('biały', 'czerwony', 'zielony', 'żółty');
    echo "<br><br>Wartość zmiennej  \$z5 wynosi: ";
    echo print_r($z5);
    echo '<br>';
    echo "Typdanych zmiennej \$z5: ";
    echo gettype($z5); //array
    echo '<br>';

###################################################

    if(is_int($z1)){
        echo "<br>Zmienna \$z1 jest typu całkowitego";
    }else{
        echo "<br>Zmienna \$z1 nie jest typu całkowitego";
    }

    if(is_double($z2)){
        echo "<br>Zmienna \$z2 jest typu zmiennoprzecinkowego";
    }else{
        echo "<br>Zmienna \$z2 nie jest typu zmiennoprzecinkowego";
    }

    if(is_float($z2)){
        echo "<br>Zmienna \$z2 jest typu zmiennoprzecinkowego";
    }else{
        echo "<br>Zmienna \$z2 nie jest typu zmiennoprzecinkowego";
    }

    if(is_bool($z4)){
        echo "<br>Zmienna \$z4 jest typu boolean";
    }else{
        echo "<br>Zmienna \$z4 nie jest typu boolean";
    }

    if(is_string($z3)){
        echo "<br>Zmienna \$z3 jest typu string";
    }else{
        echo "<br>Zmienna \$z3 nie jest typu string";
    }

    if(is_array($z5)){
        echo "<br>Zmienna \$z5 jest typu tablicowego";
    }else{
        echo "<br>Zmienna \$z5 nie jest typu tablicowego";
    }
?>
