<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
private $matricula;
private $curso;

 function pagarMensal(){
    echo "<p>Pagando a mensalidade do aluno  " . $this->nome . "<br>";
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