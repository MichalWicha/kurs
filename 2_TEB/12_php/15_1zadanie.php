<?php
    function potega($x, $y){
        return $x**$y;
    }

    function minimum($x, $y){
        return min($x,$y);
        
    }

    if (isset($_POST['przycisk']) && !empty($_POST['x']) && !empty($_POST['y'])){
        
    $x =$_POST['x'];
    $y =$_POST['y'];
    echo"$x <sup>$y</sup>wynosi: ".potega($x,$y);
    echo"Najmniejsza wartosc: ".minimum($x,$y);
    }
?>