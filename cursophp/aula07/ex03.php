<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação</title>
</head>
<body>
    <?php
$nota1 = $_GET["n1"];
$nota2 = $_GET["n2"];
$m = ($nota1+$nota2)/2;
echo "A média entre $nota1 e $nota2 é $m";
//$sit = ($m<6)?"REPROVADO":"APROVADO"; posso economizar essa variável
//concatenando a expressão com o op. unário acima.
//assim como no exemplo abaixo\/
echo "<br>A situação do aluno é " . (($m<6)?"REPROVADO":"APROVADO");




/* se a variável $sit for menor que 6, "REPROVADO" (:) se não
 "APROVADO" 
  esses são: operador unário ("?",  ":")
  "condição ? verdadeiro : falso"
 */


?>
</body>
</html>