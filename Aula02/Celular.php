<?php 
  class Celular{
    var $altura;
    var $largura;
    var $cor;
    var $marca;
    var $protecao;
    var $ligado;
    var $volume;
    var $sistema;

    function ligar(){
      if($this->ligado == false){
        echo "Ligando o Celular meu querido! 🔋";
        $this->ligado = true;
      }else{
        echo "Já está ligado meu consagrado! 🔛";
      }
    }

    function aumentarVolume(){
      $this->volume++;
      echo("Volume está em " . $this->volume);
    }
  }  
?>