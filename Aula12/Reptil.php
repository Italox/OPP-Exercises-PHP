<?php
require_once('Animal.php');

class Reptil extends Animal{
  private $corEscama;

  function locomover(){
    echo "Rastejando";
  }

  function alimentar(){
    echo "Comendo vegetais";
  }

  function emitirSom(){
    echo 'Som de Reptil';
  }    

  public function getCorEscama()
  {
      return $this->corEscama;
  }

  public function setCorEscama($corEscama)
  {
      $this->corEscama = $corEscama;
      return $this;
  }
}

?>