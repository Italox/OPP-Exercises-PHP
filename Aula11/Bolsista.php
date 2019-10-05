<?php
require_once('Aluno.php');

class Bolsista extends Aluno{
  private $bolsa;

  function renovarBolsa(){

  }

  public function pagarMensalidade($valorPago){
    echo "Mensalidade de bolsista paga";
  }

  public function getBolsa()
  {
      return $this->bolsa;
  }

  public function setBolsa($bolsa)
  {
      $this->bolsa = $bolsa;
      return $this;
  }
}
?>