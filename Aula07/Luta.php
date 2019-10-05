<?php
require_once 'Lutador.php';
class Luta{
  private $desafiado;
  private $desafiante;
  private $rounds;
  private $aprovada;

  public function lutar(){
    if($this->getAprovada() === true){
      $this->getDesafiado()->apresentar();
      $this->getDesafiante()->apresentar();

      $vencedor = rand(0,2);

      switch($vencedor){
        case 0:
          echo "<p> Empate </>";
          $this->getDesafiado()->empatarLuta();
          $this->getDesafiante()->empatarLuta();
          break;
        case 1:
          echo "Desafiado " . $this->getDesafiado()->getNome() . " venceu";
          $this->getDesafiado()->ganharLuta();
          $this->getDesafiante()->perderLuta();
          break;
        case 2:
          echo "Desafiante " . $this->getDesafiante()->getNome() . " venceu";
          $this->getDesafiante()->ganharLuta();
          $this->getDesafiado()->perderLuta();
          break;
      }

    } else{
      echo "<p>Luta não pode acontecer</p>"; 
    }
  }

  public function marcarLuta($l1, $l2){
    if($l1->getCategoria() === $l2->getCategoria() && $l1 !== $l2){
      $this->setAprovada(true);
      $this->setDesafiado($l1);
      $this->setDesafiante($l2);
    } else {
      $this->setAprovada(false);
      $this->setDesafiado(null);
      $this->setDesafiante(null);
    }
  }
  
  public function getAprovada()
  {
    return $this->aprovada;
  }

  public function setAprovada($aprovada)
  {
    $this->aprovada = $aprovada;

    return $this;
  }

  
  public function getDesafiado()
  {
    return $this->desafiado;
  }

  public function setDesafiado($desafiado)
  {
    $this->desafiado = $desafiado;

    return $this;
  }

  public function getDesafiante()
  {
    return $this->desafiante;
  }
 
  public function setDesafiante($desafiante)
  {
    $this->desafiante = $desafiante;

    return $this;
  }

  public function getRounds()
  {
    return $this->rounds;
  }

  public function setRounds($rounds)
  {
    $this->rounds = $rounds;

    return $this;
  }
}

?>