<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa {
private $setor;
private $trabalho;

function mudarTrabalho($md){
    $this->trabalho = $md;
}
function getSetor(){
    return $this->setor;
}
function setSetor($setor){
    $this->setor = $setor;
}
function getTrabalho(){
    return $this->trabalho;
}
function setTrabalho($trabalho){
    $this->trabalho = $trabalho;
}

}



?>