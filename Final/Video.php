<?php
require_once('InterfaceVideo.php');
class Video implements InterfaceVideo{
  private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;

  function __construct($titulo){
    $this->setTitulo($titulo);
    $this->avaliacao = 1;
    $this->setCurtidas(0);
    $this->setViews(0);
    $this->setReproduzindo(false);
  }

  function play(){
    if($this->getReproduzindo() === false){
      $this->setReproduzindo(true);
    } else{
      echo "<p>O video ja esta reproduzindo</p>";
    }
  }
  
  function pause(){
    if($this->getReproduzindo() === true){
      $this->setReproduzindo(false);
    } else{
      echo "<p>O video ja esta pausado</p>";
    }
  }

  function like(){
    $this->setCurtidas($this->getCurtidas() + 1);
  }

  public function getTitulo()
  {
      return $this->titulo;
  }

  public function setTitulo($titulo)
  {
      $this->titulo = $titulo;
      return $this;
  }

  public function getAvaliacao()
  {
      return $this->avaliacao;
  }

  public function setAvaliacao($avaliacao)
  { 
      $media = ($this->avaliacao + $avaliacao) / $this->getViews();
      $this->avaliacao = $media;
  }

  public function getViews()
  {
      return $this->views;
  }

  public function setViews($views)
  {
      $this->views = $views;
      return $this;
  }

  public function getCurtidas()
  {
      return $this->curtidas;
  }

  public function setCurtidas($curtidas)
  {
      $this->curtidas = $curtidas;
      return $this;
  }

  public function getReproduzindo()
  {
      return $this->reproduzindo;
  }

  public function setReproduzindo($reproduzindo)
  {
      $this->reproduzindo = $reproduzindo;
      return $this;
  }
}
?>