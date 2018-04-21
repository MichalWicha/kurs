<?php
    echo 'Interpretacja znaków specjalnych:<br>';
    echo "\x61 &#10083 &#9829 &#x1F60D &#10086";
    echo '<br>Bez interpretacji znaków specjalnych:<br>';
    echo "\u{9829} \u{61} \u{1560} \u{9825}";
?>
