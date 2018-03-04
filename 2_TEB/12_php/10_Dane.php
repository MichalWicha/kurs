<?php
    $z1 = 10;
    echo "Wartość zmiennej  \$z1 wynosi: $z1 <br>";
    echo "Typdanych zmiennej \$z1: ";
    echo gettype($z1); //integer    $z1 = 10;

    $z2 = 5.15;
    echo "<br>Wartość zmiennej  \$z1 wynosi: $z2 <br>";
    echo "Typdanych zmiennej \$z1: ";
    echo gettype($z2); //double 

    $z3 = 'tekst';
    echo "<br>Wartość zmiennej  \$z1 wynosi: $z3 <br>";
    echo "Typdanych zmiennej \$z1: ";
    echo gettype($z3); //string

    $z4 = true;
    echo "<br>Wartość zmiennej  \$z1 wynosi: $z4 <br>";
    echo "Typdanych zmiennej \$z1: ";
    echo gettype($z4); //boolean

####################################################

if(is_int($z1)){
    echo "<br>zmienna \$z1 jest typu calkowitgo";
}else{
    echo "<br>zmienna \$z1 nie jest typu calkowitego";
}

if(is_double($z2)){
    echo "<br>zmienna \$z2 jest typu przecinkowego";
}else{
    echo "<br>zmienna \$z2 nie jest typu przecinkowego";
}

if(is_float($z1)){
    echo "<br>zmienna \$z2 jest typu zmiennoprzecinkowego";
}else{
    echo "<br>zmienna \$z2 nie jest typu zmiennoprzecinkowego";
}
$z5 = array('bialy', 'czerwony', 'zielony','żółty');
    echo "<br><br>Wartosc zmiennej \$z5 wynosci:";
    echo print_r($z5);
    echo '<br>';
    echo"Typy zmiennej \$z5: ";

if(is_bool($z4)){
    echo "<br>zmienna \$z4 jest typu boolean";
}else{
    echo "<br>zmienna \$z4 nie jest typu boolean";
}

if(is_string($z3)){
    echo "<br>zmienna \$z3 jest typu string";
}else{
    echo "<br>zmienna \$z3 nie jest typu string";
}

if(is_array($z5)){
    echo "<br>zmienna \$z1 jest typu tablicowego";
}else{
    echo "<br>zmienna \$z1 nie jest typu tablicowego";
}

?>