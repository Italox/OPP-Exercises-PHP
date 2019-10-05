<?php
require_once("Animal.php");

class Ave extends Animal{
  private $corDaPena;

  function locomover(){
    echo "Voando";
  }

  function alimentar(){
    echo "Comendo frutas";
  }

  function emitirSom(){
    echo 'Piu piu';
  }

  function fazerNinho(){
    echo 'Fazendo ninho';
  }

  public function getCorDaPena()
  {
      return $this->corDaPena;
  }

  public function setCorDaPena($corDaPena)
  {
      $this->corDaPena = $corDaPena;
      return $this;
  }
}

?>