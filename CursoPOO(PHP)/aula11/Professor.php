<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{
private $especialidade;
private $salario;

function receberAum($r){
  $this->salario += $r;
}
function getEspecialidade(){
    return $this->especialidade;
}
function setEspecialidade($especialidade){
    $this->especialidade = $especialidade;
}
function getSalario(){
    return $this->salario;
}
function setSalario($salario){
    $this->salario = $salario;
}


}


?>