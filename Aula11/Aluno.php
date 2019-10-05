<?php
require_once('Pessoa.php');

class Aluno extends Pessoa{
  private $matricula;
  private $curso;

  function pagarMensalidade($valorPago){
    echo "Foi pago " . $valorPago . " de mensalidade";
  }

  public function getMatricula()
  {
      return $this->matricula;
  }

  public function setMatricula($matricula)
  {
      $this->matricula = $matricula;
      return $this;
  }

  public function getCurso()
  {
      return $this->curso;
  }

  public function setCurso($curso)
  {
      $this->curso = $curso;
      return $this;
  }
}

?>