<?php
class Lutador {
private $nome;
private $nacionalidade;
private $idade;
private $altura;
private $peso;
private $categoria;
private $vitorias;
private $derrotas;
private $empates;

function __construct($nome, $nacion, $idade, $alt, $peso, $vit, $derr, $emp) {
$this->nome = $nome;
$this->nacionalidade = $nacion;
$this->idade = $idade;
$this->altura = $alt;
$this->setPeso($peso);
$this->vitorias = $vit;
$this->derrotas = $derr;
$this->empates = $emp;   

}

 
 function getNome(){
 return $this->nome;
}
 function setNome($nome) {
    $this->nome = $nome;
}
 function getNacionalidade(){
    return $this->nacionalidade;
   }
 function setNacionalidade($nacion) {
       $this->nacionalidade = $nacion;
   }
 function getIdade(){
    return $this->idade;
   }
 function setIdade($idade) {
       $this->idade = $idade;
   }  
 function getAltura(){
    return $this->altura;
   }
 function setAltura($alt) {
       $this->altura = $alt;
   }    
 function getPeso(){
    return $this->peso;
   }
 function setPeso($peso) {
       $this->peso = $peso;
       $this->setCategoria();
   }
 function getVitorias(){
    return $this->vitorias;
   }
 function setVitorias($vit) {
       $this->vitorias = $vit;
   } 
 function getCategoria(){
    return $this->categoria;
   }
 function setCategoria() {
       
       if ($this->peso <52.2) {
           $this->categoria = "Inválido";
         }  elseif ($this->peso <= 70.3){
               $this->categoria="Leve";
            }
            elseif ($this->peso <= 83.9){
                $this->categoria = "Médio";
            }
            elseif ($this->peso <= 120.2) {
                $this->categoria = "Pesado";
            } else { $this->categoria = "Inválido";
       } 
   }  
 function getDerrotas(){
    return $this->derrotas;
   }
 function setDerrotas($derr) {  
       $this->derrotas = $derr;
   }
 function getEmpates(){
    return $this->empates;
   }
 function setEmpates($emp) {
       $this->empates = $emp;
   }
 function ganharLuta(){
    $this->setVitorias($this->getVitorias() + 1);
}
function perderLuta(){
    $this->setDerrotas($this->getDerrotas() + 1);
}
function empatarLuta() {
    $this->setEmpates($this->getEmpates() + 1);
}
function apresentar(){
    echo "<p>------------------------------<p>";
    echo "<p>CHEGOU A HORA! O Lutador " . $this->getNome();
    echo " Veio diretamente de " . $this->getNacionalidade().",";
    echo " tem ". $this->getIdade() . " anos e pesa " . $this->getPeso() . " Kg.";
    

    echo "<br> Ele tem " . $this->getVitorias() . " Vitórias ";
    echo $this->getDerrotas() . " Derrotas e ";
    echo $this->getEmpates() . " Empates";
}
function status(){
    echo "<p>------------------------<p>";
    echo "<br> " .$this->getNome();
    echo " É um peso " . $this->getCategoria();
    echo  " tem " . $this->getVitorias() . " Vitórias, ";
    echo $this->getDerrotas() . " Derrotas e ";
    echo $this->getEmpates() . " Empates <br>";
}




}




?>