<?php

class Caneta
{
  // Atributos
  var $modelo;
  var $cor;
  var $ponta;
  var $carga;

  //Metodos
  function rabiscar(){
    if($this->tampada == true){
      echo "Erro, estou tampada";
    } else{
      echo "Estou rabiscando...";
    }
    
  }

  function tampar(){
    $this->tampada = true;
  }

  function destampar(){
    $this->tampada = false;
  }
}
