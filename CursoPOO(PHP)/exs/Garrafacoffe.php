<?php
class Garrafacoffe {
public $modelo;
private $cor;
private $tipoTampa;
public $carga;
public $temperatura;

public function __construct($m, $c, $t, $carg,){
   $this->modelo = $m;
   $this->cor = $c;
   $this->tipoTampa = $t;
   $this->carga = $carg;
   }
public function getModelo(){
    return $this->modelo;
}
public function setModelo($m){
    $this->modelo = $m;
}
public function getCor(){
    return $this->cor;
}
public function setCor($c){
    $this->cor = $c;
}
public function getTipoTampa(){
    return $this->tipoTampa;
}
public function setTipoTampa($t){
    $this->tipoTampa = $t;
}
public function getCarga(){
    return $this->$carga;
}
public function setCarga($carg){
    $this->carga = $carg;
}


}


?>