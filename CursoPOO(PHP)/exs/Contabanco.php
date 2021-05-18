<?php
class Contabanco{
public $numconta;
protected $tipo;
private $dono;
private $saldo;
private $status;

public function __construct(){
    $this->setSaldo(0);
    $this->setStatus(false);
}
public function abrirConta($t){
  $this->setTipo($t);
  $this->setStatus(true);
  if ($t == "CC") {
      $this->setSaldo(50);
  } elseif ($t == "CP") {
      $this->setSaldo(150);
  }
}
  function fecharConta(){
      if($this->getSaldo() > 0){
          echo "<P>conta com dinheiro<P>";
      }elseif ($this->getsaldo() < 0) {
          echo "<P>conta em débito<P>";
      } else {
          $this->setStatus(false);
          echo "<P>Conta no nome de ". $this->getDono() . " fechada com sucesso<P>";
        }
          }
       function depositar($v){
          if ($this->getStatus()) {
              $this->setSaldo($this->getSaldo() + $v);
              echo "<p>Depósito de $v R$ na conta de ". $this->getDono(). "</p>";        
            } else {
                  echo "<P>impossivel depositar<P>";
                } 
          }
     function sacar($v){
        if($this->getStatus()){ 
            if($this->getSaldo() >= $v )  {
                $this->setSaldo($this->getSaldo() - $v);
                echo "Saque de $v R$ autorizado na conta de ". $this->getDono(). "</p>";
        } else   {
                    echo "<p>Saldo insuficiente<P>";
              }  
        } else {
            echo "<P>impossivel sacar<P>";
        }
    }
     function pagarMensal() {
    
    if ($this->getTipo() == "CC") {
        $v = 12;
    }else if ($this->getTipo() == "CP") {
        $v = 20;
    }
    if($this->getStatus()){
          $this->setSaldo($this->getSaldo() - $v);
          echo "<p>Mensalidade de $v R$ debitada da conta de ". $this->getDono() ."<p>";
        } else {
            echo "<P>Saldo insuficiente<P>";
        } 
     
    }
        


public function getStatus(){
    return $this->status;
}
public function setStatus($sta){
    $this->status = $sta;
}
public function getSaldo(){
    return $this->saldo;
}
public function setSaldo($s){
    $this->saldo = $s;
}
public function getNumConta(){
    return $this->numconta;
}
public function setNumConta($num){
    $this->numconta = $num;
}
public function getTipo(){
    return $this->tipo;
}
public function setTipo($t){
    $this->tipo = $t;
}
public function getDono(){
    return $this->dono;
}
public function setDono($d){
$this->dono = $d;
}

    }







    
  
?>