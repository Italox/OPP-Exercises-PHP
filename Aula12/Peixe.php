<?php
require_once('Animal.php');

class Peixe extends Animal{
  private $corEscama;

  function locomover(){
    echo "Nadando";
  }

  function alimentar(){
    echo "Comendo coisas";
  }

  function emitirSom(){
    echo 'Peixe nao faz som';
  }    

  function soltarBolha(){
    echo 'Soltando bolhas o0o0oOOOooo0';
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