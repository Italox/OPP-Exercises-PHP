<!DOCTYPE html>
<html lang="pt-br">
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
      require_once('JBL.php');
      $c1 = new Caneta;
      $c1->modelo = "Bic cristal";
      $c1->cor = "Azul";
      print_r($c1);

      $caixaloka = new JBL;
      $caixaloka->volume = 68;
      $caixaloka->ligar();
      print_r($caixaloka);
    ?>
  </pre>
</body>
</html>