<?php
require_once 'AcoesVideo.php';
class Video{
private $titulo;
private $avaliacao;
private $views;
private $curtidas;
private $reproduzindo;

function __construct($titulo){
    $this->titulo = $titulo;
    $this->avaliacao = 1;
    $this->views = 0;
    $this->curtidas = 0;
    $this->reproduzindo = false;
}

function play(){
$this->reproduzindo = true;
}
function pause(){
$this->reproduzindo = false;
}
function like(){
$this->curtidas++;
}
function getTitulo(){
    return $this->titulo;
}
function setTitulo($titulo){
    $this->titulo = $titulo;
}
function getAvaliacao(){
    return $this->avaliacao;
}
function setAvaliacao($avaliacao){
    $media = 0;
    $media = ($this->avaliacao + $avaliacao/$this->views);
    $this->avaliacao = $media;
}
function getViews(){
    return $this->views;
}
function setViews($views){
    $this->views = $views;
}
function getCurtidas(){
    return $this->curtidas;
}
function setCurtidas($curtidas){
    $this->curtidas = $curtidas;
}
function getReproduzindo(){
    return $this->reproduzindo;
}
function setIdade($reproduzindo){
    $this->reproduzindo = $reproduzindo;
}

}