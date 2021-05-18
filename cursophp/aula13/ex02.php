9<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <?php
$num = $_GET["num"];
$m = 0;
$res = $num * $m;
do{
    echo "$num x $m = $res <br>";
    $m++;
    $res = $num * $m;
}

 while ($m <=10);
    ?>
    <a href = "ex02.html">Voltar . <br></a>
    </body>
</html>