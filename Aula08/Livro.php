<?php
require_once('Pessoa.php');
require_once('Publicacao.php');

class Livro implements Publicacao{  
  private $autor;
  private $titulo;
  private $totalPaginas;
  private $pagAtual;
  private $aberto;
  private $leitor;

  function __construct($titulo, $autor, $totalPaginas, $leitor){
    $this->setTitulo($titulo);
    $this->setAutor($autor);
    $this->setTotalPaginas($totalPaginas);
    $this->setAberto(false);
    $this->setpagAtual(0);
    $this->setLeitor($leitor);
  }

  public function detalhes(){
    echo "Livro " . $this->getTitulo() . " escrito por " . $this->getAutor() . "<br>";
    echo "está na página " . $this->getPagAtual() . " de um total de " . $this->getTotalPaginas() . " páginas <br>";
    echo "esta sendo lido pelo " . $this->getLeitor()->getNome() . "<br>";

  }

  function getAutor()
  {
      return $this->autor;
  }

  private function setAutor($autor)
  {
      $this->autor = $autor;
      return $this;
  }

  private function getTitulo()
  {
      return $this->titulo;
  }

  private function setTitulo($titulo)
  {
      $this->titulo = $titulo;
      return $this;
  }

  private function getTotalPaginas()
  {
      return $this->totalPaginas;
  }

  private function setTotalPaginas($totalPaginas)
  {
      $this->totalPaginas = $totalPaginas;
      return $this;
  }

  private function getPagAtual()
  {
      return $this->pagAtual;
  }

  private function setPagAtual($pagAtual)
  {
      $this->pagAtual = $pagAtual;
      return $this;
  }

  private function getAberto()
  {
      return $this->aberto;
  }

  private function setAberto($aberto)
  {
    $this->aberto = $aberto;
    return $this;
  }

  private function getLeitor()
  {
    return $this->leitor;
  }

  private function setLeitor($leitor)
  {
    $this->leitor = $leitor;
    return $this;
  }

  public function abrir(){
    $this->setAberto(true);
  }
  public function fechar(){
    $this->setAberto(false);
  }
  public function folhear($pagina){
    if($pagina <= $this->getTotalPaginas()){
      $this->setPagAtual($pagina);
    } else {
      echo 'Esta página nao existe no livro';
    }
  }
  public function avancarPagina(){
    $this->setPagAtual($this->getPagAtual() + 1);
  }
  public function voltarPagina(){
    $this->setPagAtual($this->getPagAtual() - 1);
  }
}

?>