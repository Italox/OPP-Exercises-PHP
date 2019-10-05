<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exercicio</title>
</head>
<body>
  <pre>
  <?php
    require_once('Video.php');
    require_once('Gafanhoto.php');
    require_once('Visualizacao.php');

    $v[0] = new Video("Aula 1 Poo");
    $v[1] = new Video("Aula 13 CSS");
    $v[2] = new Video("Aula 2 HTML");
    $g[0] = new Gafanhoto("Italo", 24, "M", "xxxyyxxx");
    //$g[0]->ganharExp(5);

    $v1 = new Visualizacao($v[0], $g[0]);
    $v1->avaliar();
    $v2 = new Visualizacao($v[2], $g[0]);
    $v3 = new Visualizacao($v[2], $g[0]);
    $v2->avaliarPorNota(3);
    print_r($v[0]);
    print_r($v[2]);
    print_r($g[0]);
  ?>
  </pre>
</body>
</html>