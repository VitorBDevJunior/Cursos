<?php
require_once 'Animal.php';
class Reptil extends Animal{
private $corEscama;
function locomover(){
    echo "<p>Rastejando<p>";
    }
function alimentar(){
   echo "<p>Se alimenta comendo vegetais<p>";
}
function emitirSom(){
    echo "<p>Som de réptil<p>";
}
function getCorEscama(){
    return $this->corEscama;
}
function setCorEscama($corEscama){
   $this->corEscama = $corEscama;
}
}


?>