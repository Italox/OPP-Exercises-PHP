<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Polimorfismo</title>
</head>
<body>
    <pre>
    <?php
      require_once('Animal.php');
      require_once('Mamifero.php');
      require_once('Peixe.php');
      require_once('Reptil.php');
      require_once('Ave.php');
      require_once('./Mamiferos/Canguru.php');
      require_once('./Mamiferos/Cachorro.php');
      require_once('./Aves/Arara.php');
      require_once('./Peixes/GoldFish.php');
      require_once('./Repteis/Cobra.php');
      require_once('./Repteis/Tartaruga.php');

      $m = new Mamifero();
      $a = new Ave();
      $cangu = new Canguru();
      $cachorro = new Cachorro();
      $tartaruga = new Tartaruga();

      $cangu->emitirSom();
      $cachorro->emitirSom();
      $tartaruga->emitirSom();

    ?>
    </pre>
</body>
</html>