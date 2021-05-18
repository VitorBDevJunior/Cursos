<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>int. html5ephp</title>
</head>
<body>
    <div>
<?php
$valor = $_GET["v"];
$rq = sqrt($valor);
echo "A raiz quadrada de $valor é igual a " . number_format ($rq, 2);
?>
<a href = "ex01.html"> voltar</a>
</div>
</body>
</html>
 