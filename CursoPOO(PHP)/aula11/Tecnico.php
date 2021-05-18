<?php
require_once 'Aluno.php';
class Tecnico extends Aluno{
    private $registroProfissional;

    function praticar(){
        echo "<p> praticante no momento<p>";
    }
function getRegistroProfissional(){
    return $this->getRegistroProfissional;
}
function setRegistroProfissional($registroProfissional){
   $this->getRegistroProfissional = $registroProfissional;
}


}



?>