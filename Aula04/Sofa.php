<?php
class Sofa
{
  protected $cor;
  protected $tecido;
  private $lugares;
  public $almofadas;

  public function __construct($cor, $tecido, $lugares, $almofadas)
  {
    $this->cor = $cor;
    $this->tecido = $tecido;
    $this->lugares = $lugares;
    $this->almofadas = $almofadas;
  }

  public function getCor()
  {
    return $this->cor;
  }

  public function setCor($corNova)
  {
    $this->cor = $corNova;
  }

  public function getTecido()
  {
    return $this->tecido;
  }

  public function setTecido($tecidoNovo)
  {
    $this->tecido = $tecidoNovo;
  }

  public function getLugares()
  {
    return $this->lugares;
  }

  public function setLugares($lugarNovo)
  {
    $this->lugares = $lugarNovo;
  }

  public function getAlmofadas()
  {
    return $this->almofadas;
  }

  public function setAlmofadas($almofadasNovas)
  {
    $this->almofadas = $almofadasNovas;
  }
}
