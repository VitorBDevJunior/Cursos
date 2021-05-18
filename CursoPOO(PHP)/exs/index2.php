<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContaBanco</title>
</head>
<body>
    <pre>
<?php
require_once "Contabanco.php";
$p1 = new Contabanco();
$p2 = new Contabanco();
$p1->abrirConta("CC");
$p1->setDono("Jubileu");
$p1->setNumConta(42.6753);
$p1->depositar(300);

$p2->abrirConta("CP");
$p2->setDono("Creuza"); 
$p2->setNumConta(748593);

$p2->depositar(500);
$p1->sacar(338);
$p2->sacar(630);

$p1->pagarMensal();
$p2->pagarMensal();

$p1->fecharConta();
$p2->fecharConta();

print_r($p1);
print_r($p2);




?>

    <pre>
</body>
</html>