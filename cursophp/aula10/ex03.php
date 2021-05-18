
<?php

$regiao = $_GET["reg"];

switch($regiao){
case 1:
case 2:
case 4:
case 5:
case 6:
case 7:
echo "Você mora na Região <strong>Norte</strong>"; 
break;
case 8:
case 9:
case 10:
case 11:
case 12:
case 13:
case 14:
case 15:
case 16:
    echo "Você mora na <strong>Região Nordeste</strong>";
break;
case 17:
case 18:
case 19:
    echo "Você mora na <strong>Região Centro-Oeste</strong>";
    break;
case 20:
case 21:
case 22:
case 23:
    echo "Você mora na <strong>Região Sudeste</strong>";
    break;
case 24:
case 24:
case 26:
    echo "Você mora na <strong>Região Sul</strong>";
}

 ?>