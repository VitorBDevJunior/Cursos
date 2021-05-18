<?php
require_once 'Aluno.php';
class Bolsista extends Aluno{
    private $bolsa;
    function renovarBolsa(){
        echo "<p>Bolsa renovada<p> ";
    }
    function pagarMensal(){
        echo "<p>$this->nome É bolsista! paga com desconto de: " . $this->getBolsa() . "% <br>";
    }

    function getBolsa(){
        return $this->bolsa;
    }
    function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }
}


?>