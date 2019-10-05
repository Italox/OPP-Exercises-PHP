<?php

class Lutador{
  private $nome;
  private $nacionalidade;
  private $idade;
  private $altura;
  private $peso;
  private $categoria;
  private $vitorias;
  private $derrotas;
  private $empates;

  function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
    $this->setNome($nome);
    $this->setNacionalidade($nacionalidade);
    $this->setIdade($idade);
    $this->setAltura($altura);
    $this->setVitorias($vitorias);
    $this->setDerrotas($derrotas);
    $this->setEmpates($empates);
    $this->setPeso($peso);
  }

  public function apresentar(){
    echo "<p>-------------Chegou a Hora!---------------</p>";
    echo "<p>O lutador " . $this->getNome();
    echo "veio diretamente de " . $this->getNacionalidade();
    echo "tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "kg";
    echo "<br> Ele tem " . $this->getVitorias() . " vitorias";
    echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates</p>";
  }

  public function status(){
    echo "<p>---------------------------</p>";
    echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria(); 
    echo " e ja ganhou " . $this->getVitorias() . " vezes, ";
    echo " perdeu " . $this->getDerrotas() . $this->definePlural($this->getDerrotas()) . " e ";
    echo " empatou " . $this->getEmpates() . " vezes!</p>";
  }
  private function definePlural($valor){
    if($valor > 1){
      return ' vezes ';
    } else{
      return ' vez ';
    }
  }
  public function ganharLuta(){
    $this->setVitorias($this->getVitorias() + 1);
  }

  public function perderLuta(){
    $this->setDerrotas($this->getDerrotas() + 1);
  }

  public function empatarLuta(){
    $this->setEmpates($this->getEmpates() + 1);
  }

  function getNome(){
    return $this->nome;
  }

  private function setNome($nome){
    $this->nome = $nome;
  }

  private function getNacionalidade(){
    return $this->nacionalidade;
  }

  private function setNacionalidade($nacionalidade){
    $this->nacionalidade = $nacionalidade;
  }

  private function getIdade(){
    return $this->idade;
  }

  private function setIdade($idade){
    $this->idade = $idade;
  }

  private function getAltura(){
    return $this->altura;
  }

  private function setAltura($altura){
    $this->altura = $altura;
  }

  private function getPeso(){
    return $this->peso;
  }

  private function setPeso($peso){
    $this->peso = $peso;
    $this->setCategoria();
  }
  private function setCategoria(){
    $pesoAtual = $this->peso;
    if($pesoAtual < 52.2){
      $this->categoria = "Invalido";
    } elseif($pesoAtual <= 70.3){
      $this->categoria = "Leve";
    } elseif ($pesoAtual <=  83.9){
      $this->categoria = "Médio";
    } elseif($pesoAtual <= 120.2){
      $this->categoria = "Pesada";
    } else{
      $this->categoria = "Invalida";
    }
  }
  function getCategoria(){
    return $this->categoria;
  }

  private function getVitorias(){
    return $this->vitorias;
  }

  private function setVitorias($vitorias){
    $this->vitorias = $vitorias;
  }

  private function getDerrotas(){
    return $this->derrotas;
  }

  private function setDerrotas($derrotas){
    $this->derrotas = $derrotas;
  }

  private function getEmpates(){
    return $this->empates;
  }

  private function setEmpates($empates){
    $this->empates = $empates;
  }


}

?>