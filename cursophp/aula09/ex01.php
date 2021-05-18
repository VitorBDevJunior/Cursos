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
if($i >= 18){
    $v = "Já pode votar";
    $d = "Já pode dirigir";
}
else {
        $v = "Não pode votar";
    $d = "Não pode dirigir";
}
echo "Com essa idade você $v e também $d";
?>    
 <a href = "ex01.html">Back</a>
</body>
</html>