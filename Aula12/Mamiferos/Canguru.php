<?php
require_once(dirname(dirname(__FILE__)).'/Mamifero.php');

class Canguru extends Mamifero{
  
  // Polimorfismo do metodo locomover presente em Mamifero (sobreposição)
  function locomover(){
    echo 'Pulando';
  }  
}
?>