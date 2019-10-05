<?php

abstract class Pessoa{
  protected $nome, $idade, $sexo, $experiencia;

  function __construct($nome, $idade, $sexo){
    $this->setNome($nome);
    $this->setSexo($sexo);
    $this->setIdade($idade);
    $this->setExperiencia(0);
  }

  protected function ganharExp($pontos){
    $this->setExperiencia($this->getExperiencia() + $pontos);
  }

  public function getNome()
  {
      return $this->nome;
  }

  public function setNome($nome)
  {
      $this->nome = $nome;
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

  public function getSexo()
  {
      return $this->sexo;
  }

  public function setSexo($sexo)
  {
      $this->sexo = $sexo;
      return $this;
  }

  public function getExperiencia()
  {
      return $this->experiencia;
  }

  public function setExperiencia($experiencia)
  {
      $this->experiencia = $experiencia;
      return $this;
  }
}

?>