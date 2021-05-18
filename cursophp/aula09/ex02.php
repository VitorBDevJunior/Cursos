<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$a = isset($_GET["ano"])?$_GET["ano"]:1900;
$i = date("Y") - $a;
echo "Você nasceu em $a e sua idade é $i anos <br>";
if($i < 16 ) {
    $tipoVoto = "você não vota";
}
elseif (($i >= 16 && $i < 18) || ($i > 65)) {
        $tipoVoto = "seu voto é opcional";
    }
    else {
        $tipoVoto = "seu voto é obrigatório";
    }


echo  $tipoVoto;
?>    
 <a href = "ex02.html">Back</a>
</body>
</html>