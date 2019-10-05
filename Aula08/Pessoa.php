<?php
class Pessoa{
  private $nome;
  private $idade;
  private $sexo;
  function __construct($nome, $idade, $sexo){
    $this->setNome($nome);
    $this->setIdade($idade);
    $this->setSexo($sexo);
  }
  public function fazerAniver(){  
    $this->setIdade($this->getIdade() + 1);
  }

  private function getSexo()
  {
    return $this->sexo;
  }

  private function setSexo($sexo)
  {
    $this->sexo = $sexo;

    return $this;
  }
 
  private function getIdade()
  {
    return $this->idade;
  }
 
  private function setIdade($idade)
  {
    $this->idade = $idade;

    return $this;
  }

  
  function getNome()
  {
    return $this->nome;
  }

  private function setNome($nome)
  {
    $this->nome = $nome;

    return $this;
  }
}
  
?>