<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
<?php
$n = isset($_GET["num"])?$_GET["num"]:0;
$o = $_GET["oper"];
switch ($o){
case 1:
$r = $n * 2;
break;
case 2: 
$r = $n ^ 3;
break;
case 3:
$r = sqrt($n); //ou $n ^ 0.5 ou (1/2)
}

echo "O resultado da operação solicitada foi $r";
?>
<a href = "ex01.html" > Voltar</a>


    </div>
</body>
</html>