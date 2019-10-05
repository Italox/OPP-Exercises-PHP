<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Polimorfismo Sobrecarga/Sobreposição</title>
</head>
<body>
  <pre>
  <?php
  require_once("Animal.php");
  require_once("Mamifero.php");
  require_once("Lobo.php");
  require_once("Cachorro.php");

  $lobo = new Lobo();
  $lobo->emitirSom();
  
  $cachorro = new Cachorro();
  $cachorro->emitirSom();
  $cachorro->reagir('Latir', 1, 2);


  ?>
  </pre>
</body>
</html>