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
    require_once('Pessoa.php');
    require_once('Livro.php');

    $p[0] = new Pessoa("Italo", 22, "M");
    $p[1] = new Pessoa("Heloise", 19, "F");

    $l[0] =new Livro("JavaScript Avançado", "Italo A.", 500, $p[0]);

    $l[1] =new Livro("JavaScript Basic", "Italo A.", 150, $p[1]);
    $l[0]->folhear(5);
    $l[0]->avancarPagina();
    print_r($l[0]->detalhes());
  ?>
  </pre>
</body>
</html>