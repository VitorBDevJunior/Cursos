<?php
require_once 'Animal.php';
class Ave extends Animal{
private $corPena;

function locomover(){
    echo "<p>Voando<p>";
    }
function alimentar(){
   echo "<p>Comendo Frutas<p>";
}
function emitirSom(){
    echo "<p>Som de Ave<p>";
}
function fazerNinho(){
    echo "<p>Construiu um ninho<p>";
}
function getCorPena(){
    return $this->corPena;
}
function setCorPena(){
    $this->corPena = $corPena;
}

}


?>