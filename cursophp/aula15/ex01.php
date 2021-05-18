<?php
function teste (&$x) {
    $x += 2;
    echo "<p> Valor de x é $x";
}
$a = 3;
teste($a);
echo "<p> O valor de A é $a <p>";