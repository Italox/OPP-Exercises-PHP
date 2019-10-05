<?php
require_once('Pessoa.php');

class Gafanhoto extends Pessoa{
  private $login, $totalAssistido;

  function __construct($nome, $idade, $sexo, $login){
    parent::__construct($nome, $idade, $sexo);
    $this->setLogin($login);
    $this->setTotalAssistido(0);
  }

  function viuMaisUm(){
    $this->setTotalAssistido($this->getTotalAssistido() + 1);
  }

  public function getLogin()
  {
      return $this->login;
  }

  public function setLogin($login)
  {
      $this->login = $login;
      return $this;
  }

  public function getTotalAssistido()
  {
      return $this->totalAssistido;
  }

  public function setTotalAssistido($totalAssistido)
  {
      $this->totalAssistido = $totalAssistido;
      return $this;
  }
}

?>