<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Herança</title>
</head>
<body>
  <pre>
    <?php
    require_once('Pessoa.php');
    require_once('Visitante.php');
    require_once('Aluno.php');
    require_once('Bolsista.php');
    require_once('Professor.php');
    //$p1 = new Pessoa(); não pode instanciar classe abstrata
    $v1 = new Visitante();
    $v1->setNome("Italo");
    $v1->setIdade(24);
    $v1->setSexo("M");

    $a1 = new Aluno();
    $a1->setNome("Heloise");
    $a1->setCurso("Tatuagem");
    $a1->setMatricula(157);
    $a1->setSexo("F");
    $a1->setIdade(20);

    $b1 = new Bolsista();
    $b1->setNome('Carlos');

    // Professor
    $p1 = new Professor();
    $p1->setNome("Italo");
    $p1->setSexo("M");
    $p1->setIdade(20);
    $p1->setSalario(10000);
    $p1->setEspecialidade("Programming");



    print_r($v1);
    print_r($a1);
    print_r($b1);
    print_r($p1);
    $p1->recebeAumento(2000);
    print_r($p1);

    
    ?>
  </pre>
</body>
</html>