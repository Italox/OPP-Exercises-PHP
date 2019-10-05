<?php

class Caneta
{
  // Atributos
  public $modelo;
  public $cor;
  private $ponta;
  protected $carga;
  protected $tampada;

  //Metodos
  public function rabiscar(){
    if($this->tampada == true){
      echo "Erro, estou tampada";
    } else{
      echo "Estou rabiscando...";
    }
    
  }

  private function tampar(){
    $this->tampada = true;
  }

  private function destampar(){
    $this->tampada = false;
  }
}
