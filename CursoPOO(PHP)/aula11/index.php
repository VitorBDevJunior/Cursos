<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>herança</title>
</head>
<body>
    <pre>
<?php
require_once 'Aluno.php';
require_once 'Bolsista.php';
require_once 'Professor.php';
require_once 'Tecnico.php';
/*$p1 = new Visitante;
$p1->setNome("Ricardo");
$p1->setSexo("Trans");
$p1->setIdade(24);
$p1->fazerAniv();
print_r($p1);*/

$a1 = new Aluno();
$a1->setNome("Pedro");
$a1->setIdade(16);
$a1->setSexo("M");
$a1->setCurso("Informática");
$a1->setMatricula(2261777438);
$a1->fazerAniv();
$a1->pagarMensal();
print_r($a1);


$b1 = new Bolsista();
$b1->setNome("Jubileu");
$b1->setMatricula(1176);
$b1->setBolsa(12.5);
$b1->setCurso("ADM");
$b1->setIdade(33);
$b1->pagarMensal();

print_r($b1);

$pr1 = new Professor();
$pr1->setNome("Sonila");
$pr1->setIdade(44);
$pr1->setSexo("M");
$pr1->setSalario(3450.00);
$pr1->setEspecialidade("Matemática");
$pr1->receberAum(650);
print_r($pr1);

$t1 = new Tecnico();
$t1->setNome("Creitu");
$t1->setIdade(23);
$t1->setSexo("M");
$t1->setRegistroProfissional("Técnico de Manutenção");
$t1->setMatricula(12313131);
//$t1->praticar(false);
print_r($t1);

?>
    <pre>
</body>
</html>