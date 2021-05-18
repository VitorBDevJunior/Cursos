<?php
require_once 'ControleRemoto.php';
$c = new ControleRemoto();
$c->ligar();
$c->maisVolume();
$c->maisVolume();
$c->play();

$c->abrirMenu();

?>