<?php
    echo 'Interpretacja znakow specjalnych:<br>';
    echo "\x61";
    echo "&#9829";
    echo '<br>Bez interpretacja znakow specjalnych:<br>';

    echo "\u{9829} \u{61} \u{1568}";
?>