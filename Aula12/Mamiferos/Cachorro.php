<?php
require_once(dirname(dirname(__FILE__)).'/Mamifero.php');

class Cachorro extends Mamifero{
  // Polimorfismo do metodo emitirSom presente em Mamifero (sobreposição)
  function emitirSom(){
    echo "Au Au";
  }
}
?>