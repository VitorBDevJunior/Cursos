<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {
    private $matricula;
    private $curso;

    function cancelarMatricula(){
        $this->matricula = false;
    }
function getMatricula(){
    return $this->matricula;
}
function setMatricula($matricula){
    $this->matricula = $matricula;
}
function getCurso(){
    return $this->curso;
}
function setCurso($curso){
    $this->curso = $curso;
}
}


?>