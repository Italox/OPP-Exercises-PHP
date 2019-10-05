<?php
abstract class Animal{
  private $peso;
  private $membros;
  private $idade;

  abstract function locomover();
  abstract function alimentar();
  abstract function emitirSom();

  public function getPeso()
  {
      return $this->peso;
  }

  public function setPeso($peso)
  {
      $this->peso = $peso;
      return $this;
  }

  public function getMembros()
  {
      return $this->membros;
  }

  public function setMembros($membros)
  {
      $this->membros = $membros;
      return $this;
  }

  public function getIdade()
  {
      return $this->idade;
  }

  public function setIdade($idade)
  {
      $this->idade = $idade;
      return $this;
  }
}

?>