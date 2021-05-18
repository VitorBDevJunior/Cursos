<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condições (calc.nota)</title>
</head>
<body>
    <?php
$n1 = $_GET["nt1"];
$n2 = $_GET["nt2"];
$res = ($n1 + $n2)/ 2;


if ($res >=7){
    echo "Sua nota é $res, <strong>APROVADO</strong>";
 }
 elseif ( $res <5) {
     echo "Sua nota é $res <strong>REPROVADO</strong>";
 }
 else {
     echo "Sua nota é $res <strong>RECUPERAÇÃO</strong>";
 }
 
  
    ?>
    <a href = "ex03.html" >Voltar</a>
</body>
</html>