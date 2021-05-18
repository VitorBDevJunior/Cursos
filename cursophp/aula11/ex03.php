<?php
$nt1= $_GET["n1"];
$nt2= $_GET["n2"];
$inc= $_GET ["inc"];
while ($nt1 <= $nt2){
    echo $nt1 . "<br>";
    $nt1 += $inc;
}
while ($nt1 >= $nt2){
    echo $nt1 . "<br>";
    $nt1 -= $inc;
}

?> <a href = "ex03.html">Voltar</a>