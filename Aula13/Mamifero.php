<?php
require_once('Animal.php');

class Mamifero extends Animal{
  protected $corPelo;

  function emitirSom(){
    echo "<p>Som de mamifero</p>";
  }
}
?>