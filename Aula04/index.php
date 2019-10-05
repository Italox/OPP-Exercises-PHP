<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <pre>
  <?php
  require_once('Caneta.php');
  require_once('Sofa.php');
  $c1 = new Caneta("BIC", "Preta", 0.5);
  print_r($c1);

  $sofaDaHelo = new Sofa("Preto", "Veludo", 4, 8);
  print "A Heloise tem um sofa {$sofaDaHelo->getCor()} com um tecido de {$sofaDaHelo->getTecido()}, possui {$sofaDaHelo->getLugares()} lugares e {$sofaDaHelo->getAlmofadas()} almofadas"
  ?>
  </pre>
</body>

</html>