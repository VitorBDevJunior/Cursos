<?php
require_once "Pessoa.php";
require_once "Publicacao.php";
class Livro implements Publicacao {
private $titulo;
private $autor;
private $totPaginas;
private $pagAtual;
private $aberto;
private $leitor;

function detalhes(){
echo "<hr> Livro " . $this->titulo . " escrito por " . $this->autor;
echo "<br> Paginas: " . $this->totPaginas . ". Página atual: " . $this->PagAtual;
echo "<br> Sendo lido por " . $this->leitor->getNome();
}
function __construct($titulo, $autor, $totPaginas, $leitor){
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->aberto = false;
    $this->PagAtual = 0;
    $this->totPaginas = $totPaginas;
    $this->leitor = $leitor;
}

function getTitulo(){
    return $this->titulo;
}
function setTitulo($nome){
    $this->titulo = $titulo;
}
function getAutor(){
    return $this->autor;
}
function setAutor($autor){
    $this->autor = $autor;
}
function getTotPaginas(){
    return $this->totPaginas;
}
function setTotPaginas(){
    $this->totPaginass = $totPaginas;
}
function getPagAtual(){
        return $this->pagAtual;
    }
function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }
function getAberto(){
        return $this->aberto;
    }
function setAberto($aberto){
        $this->aberto = $aberto;
    }
function getLeitor(){
        return $this->leitor;
    }
function setleitor($leitor){
        $this->leitor = $leitor;
}
function abrir(){
  $this->aberto = true;
}
function fechar(){
$this->aberto = false;
}
function folhear($fl){
if ($fl > $this->totPaginas){
    $this->pagAtual = 0;
} else {
    $this->pagAtual = $fl;
}
}
function avançarPag(){
$this->getPagAtual ++;
}
function voltarPag(){
$this->getPagAtual --;
}


}


