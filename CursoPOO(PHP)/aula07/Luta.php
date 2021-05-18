<?php
require_once "Lutador.php";
class Luta {
private $desafiado;
private $desafiante;
private $rounds;
private $aprovada;

function marcarLuta($l1, $l2){
if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
    $this->aprovada = true;
    $this->desafiado = $l1;
    $this->desafiante = $l2;
} else { 
     $this->aprovada = false;
     $this->desafiado = null;
     $this->desafiante = null;
}
}
function lutar(){
  if ($this->aprovada) {
      $this->desafiado->apresentar();
      $this->desafiante->apresentar();
      $vencedor = rand(0,2);
      switch ($vencedor){
          case 0: //empate
            echo "<p>Empate!<p>";
            $this->desafiado->empatarLuta();
            $this->desafiante->empatarLuta();
            break;
          case 1: //desafiado vence
            echo "<p>" . $this->desafiado->getNome() . " Venceu ";
            $this->desafiado->ganharLuta();
            $this->desafiante->perderLuta();
            break;
          case 2: //desafiante vence
            echo "<p>" . $this->desafiante->getNome() . " Vence ";
            $this->desafiado->perderLuta();
            $this->desafiante->ganharLuta();    
            break;
      }
  } else {
      echo "<p> Luta não pode acontecer <p> ";
  }
}



function getDesafiado(){
    return $this->desafiado;
}
function setDesafiado($d) {
    $this->desafiado = $d;
}
function getDesafiante(){
return $this->desafiante;
}
function setDesafiante($des){
    $this->desafiante = $des;
}
function getRounds(){
    return $this->rounds;
}
function setRounds($rd){
    $this->rounds = $rd;
}
function getAprovada(){
    return $this->aprovada;
}
function serAprovada(){
    $this->aprovada = $apr;
}

}

?>