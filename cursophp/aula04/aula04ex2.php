<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somador</title>
</head>
<body>
    <?php
$n1 = $_GET ["a"];
$n2 = $_GET ["b"];
$n3 = ($n1 + $n2) / 2;
echo "a soma entre os valores é ". ($n1 + $n2);
echo "<br/>A subtração entre os valores é ". ($n1 - $n2);
echo "<br/>A multiplicação entre os valores é " . ($n1 * $n2);
echo "<br/>A divisão entre os valores é " . ($n1 / $n2);
echo "<br/>O módulo vale " . ($n1 % $n2);
echo "<br/>A média é $n3";
?>

</body>
</html>