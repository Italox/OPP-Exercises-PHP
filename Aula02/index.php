<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
    require_once('Caneta.php');
    require_once('Celular.php');
    $c1 = new Caneta;
    $c1->cor = "Azul";
    $c1->ponta = 0.5;
    $c1->tampada = false;
    $c1->tampar();
    $c1->rabiscar();
    echo "</br>";
    $italofone = new Celular;
    $italofone->altura = 15;
    $italofone->largura = 20;
    $italofone->sistema = "IOS";
    $italofone->volume = 17;
    $italofone->ligar();
    echo "</br>";
    $italofone->ligar();
    echo "</br>";
    print_r($italofone);
    $italofone->aumentarVolume();
  ?>
</body>
</html>