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
      require_once('Professor.php');
      require_once('Funcionario.php');
      require_once('Aluno.php');

      $p1 = new Pessoa();
      $p2 = new Aluno();
      $p3 = new Professor();
      $p4 = new Funcionario();

      $p1->setNome('Pedro');
      $p2->setNome('Maria');
      $p3->setNome('Fabiano');
      $p4->setNome('Italo');

      $p2->setCurso("Ciencia da Computação");
      $p3->setSalario(1500.00);
      $p4->setSetor('Laboratorio');

      print_r($p1);
      print_r($p2);
      print_r($p3);
      print_r($p4);
    ?>
  </pre>
</body>
</html>