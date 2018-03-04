<?php
    $x = 2;
    if($x == 1){
        echo 'Jeden';
    }else if ($x == 2){
        echo 'Dwa';
    }else if ($x == 3){
        echo 'Trzy';
    }else{
        echo 'Inna Liczba';
    }


//switch

    switch($x){
        case 1:
            echo 'Jeden';
            break;
        case 2:
            echo 'Dwa';
            break;
        case 3:
            echo 'Trzy';
            break;
        default:
            echo 'Inna liczba';
    }

    $tekst = 'Janusz';
    
    switch($tekst){
        case 'Anna':
            echo 'Witaj Anna';
            break;
        case 'Janusz':
            echo 'Witaj Janusz';
            break;
        default:
            echo 'Witaj inny uzytkowniku';
    }
?>